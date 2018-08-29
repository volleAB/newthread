/**
 * 首页.js - > page - home.php
 * 
 * 2018.7.20
 * by fig
 * v1.0.0
 */
window.onload = function() {

    var imgBox = $(".img-box"),
        old = 2,
        _time = 3,
        dots = $(".dot");

    for (let z = 0; z < dots.length; z++) {
        const dot = dots[z];
        dot.addEventListener("click", function() {
            turnTheDots(this);
            //自动切换 重置
            _time = this.getAttribute("data-num");
            _time == dots.length ? _time = 1 : _time++;
        }, false);
    }

    function turnTheDots(obj) { //切换 点
        let now = obj.getAttribute("data-num");
        turn(now);
        old = now;
        for (let z = 0; z < dots.length; z++) {
            dots[z].className != dots[z].className.replace(/on$/, '') ? dots[z].className = dots[z].className.replace(/on$/, '') : "";
        }
        obj.className += "on";
        //自动切换 重置
        clearTimeout(timer3);
        timer4 = setTimeout(() => {
            timer3 = setInterval(() => {
                turnTheDots(dots[_time - 1]);
                _time == dots.length ? _time = 1 : _time++;
            }, 5000);
            clearTimeout(timer4);
        }, 1);
    };

    function turn(num) { //图片切换
        num == dots.length + 1 ? num = 1 : num == 0 ? num = dots.length : "";
        var transform = imgBox.style.transform,
            transition = imgBox.style.transition,
            reg = new RegExp(old + "00%\\)");

        old == dots.length && num == 1 ? smooth(old - -1) :
            num == dots.length && old == 1 ? smooth(old - 1) :
            imgBox.style.transform = transform.replace(reg, num + "00%)");

        function smooth(nextNum) { //平滑切换
            imgBox.style.transform = transform.replace(reg, nextNum + "00%)");
            var timer1 = setTimeout(() => {
                imgBox.style.transition = "";
                imgBox.style.transform = transform.replace(reg, num + "00%)");
                clearTimeout(timer1);
                var timer2 = setTimeout(() => {
                    imgBox.style.transition = transition;
                    clearTimeout(timer2);
                }, 751);
            }, 751);
        }
    }
    var timer3 = setInterval(() => { //自动切换 开始
        turnTheDots(dots[_time - 1]);
        _time == dots.length ? _time = 1 : _time++;
    }, 5000);
}