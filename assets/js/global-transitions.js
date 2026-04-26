/**
 * Page Transition Logic - Doctor Cabello
 * Handles SVG morphing overlays using GSAP.
 */

document.addEventListener('DOMContentLoaded', () => {
    const overlay = document.querySelector(".shape-overlays");
    if (!overlay) return;

    const paths = document.querySelectorAll(".shape-overlays__path");
    let numPoints = 10;
    let numPaths = paths.length;
    let delayPointsMax = 0.3;
    let delayPerPath = 0.25;
    let duration = 0.85; 
    let isOpened = false;
    let pointsDelay = [];
    let allPoints = [];
    let isAnimating = false;

    // GSAP Timeline setup
    let tl = gsap.timeline({ 
        onUpdate: render,
        defaults: {
            ease: "power3.inOut", 
            duration: duration
        }
    });

    // Initialize points
    for (let i = 0; i < numPaths; i++) {
        let points = [];
        allPoints.push(points);
        for (let j = 0; j < numPoints; j++) {
            points.push(100);
        }
    }

    function render() {
        for (let i = 0; i < numPaths; i++) {
            let path = paths[i];
            let points = allPoints[i];
            
            let d = "";
            d += isOpened ? `M 0 0 V ${points[0]} C` : `M 0 ${points[0]} C`;
            
            for (let j = 0; j < numPoints - 1; j++) {
                let p = (j + 1) / (numPoints - 1) * 100;
                let cp = p - (1 / (numPoints - 1) * 100) / 2;
                d += ` ${cp} ${points[j]} ${cp} ${points[j+1]} ${p} ${points[j+1]}`;
            }
            
            d += isOpened ? ` V 100 H 0` : ` V 0 H 0`;
            path.setAttribute("d", d);
        }  
    }

    function resetPoints() {
        for (let i = 0; i < numPaths; i++) {
            for (let j = 0; j < numPoints; j++) {
                allPoints[i][j] = 100;
            }
        }
    }

    function animateTimeline() {
        tl.progress(0).clear();
        
        for (let i = 0; i < numPoints; i++) {
            pointsDelay[i] = Math.random() * delayPointsMax;
        }
        
        for (let i = 0; i < numPaths; i++) {
            let points = allPoints[i];
            let pathDelay = delayPerPath * (isOpened ? i : (numPaths - i - 1));
                
            for (let j = 0; j < numPoints; j++) {      
                let delay = pointsDelay[j];      
                tl.to(points, {
                    [j]: 0
                }, delay + pathDelay);
            }
        }
    }

    // Reveal animation on load
    window.addEventListener('load', () => {
        isOpened = false;
        resetPoints();
        animateTimeline();
    });

    /**
     * Trigger transition manually (can be used for tab switching or page changes)
     * @param {Function} callback - Function to run when screen is fully covered
     */
    window.triggerTransition = function(callback) {
        if (isAnimating) return;

        isAnimating = true;
        overlay.classList.add('is-opened');

        // Phase 1: Cover
        isOpened = true;
        resetPoints();
        animateTimeline();

        tl.eventCallback("onComplete", () => {
            if (callback && typeof callback === 'function') {
                callback();
            }

            // Phase 2: Reveal
            setTimeout(() => {
                isOpened = false;
                resetPoints();
                animateTimeline();

                tl.eventCallback("onComplete", () => {
                    isAnimating = false;
                    overlay.classList.remove('is-opened');
                });
            }, 100);
        });
    };

    // If the user wants the specific switchTab logic from the snippet:
    window.switchTab = function(tabId) {
        window.triggerTransition(() => {
            // DOM swapping logic for tabs
            document.querySelectorAll('.tab-content').forEach(el => {
                el.classList.remove('active');
                el.classList.add('hidden');
            });
            const targetTab = document.getElementById(tabId);
            if (targetTab) {
                targetTab.classList.remove('hidden');
                targetTab.classList.add('active');
            }

            // Update nav links
            document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
            const linkId = 'link-' + tabId.replace('tab-', '');
            const targetLink = document.getElementById(linkId);
            if (targetLink) {
                targetLink.classList.add('active');
            }
        });
    };
});
