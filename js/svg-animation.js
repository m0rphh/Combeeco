jQuery(document).ready(function ($) {

    function elementShouldAnimate($container, inScreen, outsideScreen) {

        var onScrollFunction = function ($container, inScreen, outsideScreen) {
            var elementOffset = $container.offset().top;
            var elementBottom = elementOffset + $container.outerHeight();
            var currentScroll = $(document).scrollTop();
            var windowHeight = $(window).height();

            var bottomScreenOffset = currentScroll + windowHeight;

            var elementInScreen = (elementOffset > currentScroll && elementOffset < bottomScreenOffset) ||
                (elementBottom > currentScroll && elementBottom < bottomScreenOffset);

            var topX = elementOffset - 200;
            var bottomX = elementBottom + 200;

            var middle = currentScroll + windowHeight / 2;

            var shouldAnimate = middle > topX && middle < bottomX;

            if (elementInScreen) {
                if (shouldAnimate && !$container.data('animation-started')) {
                    $container.data('animation-started', true);
                    inScreen();
                }

            } else {
                $container.data('animation-started', false);
                outsideScreen();
            }
        }

        onScrollFunction($container, inScreen, outsideScreen);
        $(document).scroll(function () {
            onScrollFunction($container, inScreen, outsideScreen);
        });


    }



    /**
     * Show loader in specific svg element
     *
     * @param svgDocument - svg DOM document, with structure as shown in HTML part
     * @param percent - value from 1 to 100 to animate progress
     * @param loadingTextValue - loading text tho show bellow percentage in loader - default erreicht
     * @param onDone - callback on done
     */
    function showLoader(svgDocument, percent, loadingTextValue, onDone) {

        // Get needed vars
        var loadingPath = svgDocument.getElementsByClassName('loader-path');
        var percentText = svgDocument.getElementById('percentText');
        var loadingText = svgDocument.getElementById('loadingText');
        var percentText = svgDocument.getElementById('percentText');
        var loadingText = svgDocument.getElementById('loadingText');

        // Get path length and old offset
        // TODO: Hardcoded 270 - some browsers doesn't support getTotalLength
        var pathLength = Math.round(loadingPath[0].getTotalLength ? loadingPath[0].getTotalLength() : 270);
        var oldOffset = loadingPath[0].style.strokeDashoffset
        var totalLength = pathLength;

        // Set stroke offset
        loadingPath[0].style.strokeDasharray = pathLength;
        loadingPath[0].style.strokeDashoffset = pathLength;

        // If continuing loader
        if (oldOffset != '') {
            pathLength = parseInt(oldOffset);
        }

        // Set text value if any
        if (loadingTextValue) {
            loadingText.textContent = loadingTextValue;
        }

        var interval = function () {

            // Calculate current percentage
            var currentPercent = 100 - Math.round(pathLength / totalLength * 100);
            percentText.textContent = currentPercent + '%';

            // Animate
            if (currentPercent <= percent) {
                if (pathLength > 0) {
                    loadingPath[0].style.strokeDashoffset = --pathLength;

                    if (currentPercent < percent) {
                        requestAnimationFrame(interval);
                    } else {
                        onDone();
                    }
                }
            } else {
                onDone();
            }
        };
        requestAnimationFrame(interval);
    }


















    // svg animation
    if ($('.part-2').length) {
        elementShouldAnimate($('.part-2'), function () {
            // phoneAnimaiton();
            console.log('over');

            //

            // Test calls
            var el = document.getElementById('loadingSvg');
            showLoader(el, 20, null, function () {
                setTimeout(function () {
                    showLoader(el, 67, null, function () {
                        setTimeout(function () {
                            showLoader(el, 100);
                        }, 1500);
                    });
                }, 1500);
            });
            //

        }, function () {

        });
    }
    // svg animation





});