/**
 * 首页.js - > page - home.php
 * 
 * 2018.7.20
 * by fig
 * v1.0.0
 */
window.onload = function() {

    var imgBox = $(".carousel-img-box"),
        old = 2,
        _time = 3,
        dots_l = $(".dot-l");

    for (let z = 0; z < dots_l.length; z++) {
        const dot_l = dots_l[z];
        dot_l.addEventListener("click", function() {
            turnTheDots(this);
            //自动切换 重置
            _time = this.getAttribute("data-num");
            _time == dots_l.length ? _time = 1 : _time++;
        }, false);
    }

    function turnTheDots(obj) { //切换 点
        let now = obj.getAttribute("data-num");
        turn(now);
        old = now;
        for (let z = 0; z < dots_l.length; z++) {
            dots_l[z].className != dots_l[z].className.replace(/on$/, '') ? dots_l[z].className = dots_l[z].className.replace(/on$/, '') : "";
        }
        obj.className += "on";
        //自动切换 重置
        clearTimeout(timer3);
        timer4 = setTimeout(() => {
            timer3 = setInterval(() => {
                turnTheDots(dots_l[_time - 1]);
                _time == dots_l.length ? _time = 1 : _time++;
            }, 5000);
            clearTimeout(timer4);
        }, 1);
    };

    function turn(num) { //图片切换
        num == dots_l.length + 1 ? num = 1 : num == 0 ? num = dots_l.length : "";
        var transform = imgBox.style.transform,
            transition = imgBox.style.transition,
            reg = new RegExp(old + "00%\\)");

        old == dots_l.length && num == 1 ? smooth(old - -1) :
            num == dots_l.length && old == 1 ? smooth(old - 1) :
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
        turnTheDots(dots_l[_time - 1]);
        _time == dots_l.length ? _time = 1 : _time++;
    }, 5000);

    // ............................................................................//
    var dots = $(".dot-two");
    if (!dots.length) {
        $(".dots").style = "display:none;"
    } else {
        for (let z = 0; z < dots.length; z++) {
            dots[z].onclick = function() {
                changeDot(z, "two");
            };
        }
        $("#next").onclick = function() {
            sx(1, "two");
        };
        $("#previous").onclick = function() {
            sx(-1, "two");
        };
    }
    // $("#after-three").onclick = function() {
    //     sx(1, "three");
    // };
    // $("#before-three").onclick = function() {
    //     sx(-1, "three");
    // };
    // $("#after-four").onclick = function () {
    //     sx(1, "four");
    // };
    // $("#before-four").onclick = function () {
    //     sx(-1, "four");
    // };

};





function sx(num, mut = "") {
    var pageBoxs = $(".page-box-" + mut),
        _bool = true,
        _z;
    for (let z = 0; z < pageBoxs.length; z++) {
        if (pageBoxs[z].getAttribute("isHide") == "false" && _bool) {
            z + num >= pageBoxs.length ? _z = 0 : z + num < 0 ? _z = pageBoxs.length - 1 : _z = z + num;
            changeDot(_z, mut);
            _bool = false;
        }
    }

}

function changeDot(num = 0, mut = "") {
    var postLists = $(".page-box-" + mut),
        dots = $(".dot-" + mut);
    for (let z = 0; z < postLists.length; z++) {
        const dot = dots[z],
            postList = postLists[z];
        if (z == num) {
            setTimeout(() => {
                dot ? dot.setAttribute("isHide", false) : "";
                postList.setAttribute("isHide", false);
                postList.setAttribute("animation", "in");
            }, 500);
        } else if (postList.getAttribute("isHide") != "ture") {
            postList.setAttribute("animation", "out");
            setTimeout(() => {
                dot ? dot.setAttribute("isHide", true) : "";
                postList.setAttribute("isHide", true);
            }, 499);

        }
    }
}