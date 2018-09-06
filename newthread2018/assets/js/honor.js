/**
 * 荣誉成果。js
 * 2018.7.27
 * by fig
 */
window.onload = function() {
    changePage();
    var lis = $(".option"),
        lists = $(".list"),
        dots = $(".dot");
    for (let z = 0; z < lis.length; z++) {
        lis[z].onclick = function() {
            changePage(this.getAttribute("data-num"), true);
        };
    }

    changePost();
    for (let z = 0; z < lists.length; z++) {
        lists[z].onclick = function() {
            changePost(this.getAttribute("data-num"));
        };
    }


    if (!dots.length) {
        $(".dots").style = "display:none;"
    } else {
        for (let z = 0; z < dots.length; z++) {
            dots[z].onclick = function() {
                changeDot(z);
            };
        }
        $("#next").onclick = function() { sx(1); };
        $("#previous").onclick = function() { sx(-1); };
    }


};
window.onhashchange = changePage;

function sx(num) {
    var dots = $(".dot"),
        _bool = true,
        _z;
    for (let z = 0; z < dots.length; z++) {
        if (dots[z].getAttribute("isHide") == "false" && _bool) {
            z + num >= dots.length ? _z = 0 : z + num < 0 ? _z = dots.length - 1 : _z = z + num;
            changeDot(_z);
            _bool = false;
        }
    }
}

function changeDot(num = 0) {
    var postLists = $(".postList"),
        dots = $(".dot");
    for (let z = 0; z < dots.length; z++) {
        const dot = dots[z],
            postList = postLists[z];
        if (z == num) {
            setTimeout(() => {
                dot.setAttribute("isHide", false);
                postList.setAttribute("isHide", false);
                postList.setAttribute("animation", "in");
            }, 500);
        } else if (dot.getAttribute("isHide") != "ture") {
            postList.setAttribute("animation", "out");
            setTimeout(() => {
                dot.setAttribute("isHide", true);
                postList.setAttribute("isHide", true);
            }, 499);

        }
    }
}

function changePage(num = "one", bool = false) {
    var aims = getPurpose(),
        list = {
            "one": "科研项目",
            "two": "创新比赛",
            "three": "知识产权",
            "four": "优秀学生"
        };

    bool ? aims = num : ""; //点击 .option 赋值 
    changeSection(aims);

    switch (aims) {
        case "one":
            $(".thisPage").innerHTML = list.one;
            changeClassName(1);
            break;
        case "two":
            $(".thisPage").innerHTML = list.two;
            changeClassName(2);
            break;
        case "three":
            $(".thisPage").innerHTML = list.three;
            changeClassName(3);
            break;
        case "four":
            $(".thisPage").innerHTML = list.four;
            changeClassName(4);
            break;


        default:
            break;
    }

    function changeSection(num) { //内容也切换
        var pages = $(".pageOfNum");
        for (let z = 0; z < pages.length; z++) {
            const page = pages[z];


            if (page.id == num) {

                var timer1 = setTimeout(() => {
                    page.setAttribute("isHide", "false");
                    page.setAttribute("animation", "in");

                    clearTimeout(timer1);
                }, 500);

            } else {

                page.setAttribute("animation", "out");

                page.getAttribute("isHide") != "true" ?
                    timer2 = setTimeout(() => {
                        page.setAttribute("isHide", "true");

                        clearTimeout(timer2);
                    }, 499) : "";

            }
            // page.id == num ? page.setAttribute("isHide", "false") : page.setAttribute("isHide", "true");
        }
    }

    function changeClassName(num) {
        let arr = $(".option");
        for (let z = 0; z < arr.length; z++) {
            arr[z].className = "option";
        }
        arr[num - 1].className += " on";
    }

    function getPurpose() { //获取锚点
        var url = window.location.href,
            ret = "";
        ret = url.slice(url.indexOf("#"));
        ret.slice(0, 1) !== "#" ? ret = "one" : ret = ret.slice(1);
        return ret;
    }
}
var time_if = true;

function changePost(num = 0) {
    if (time_if) {
        time_if = false;

        var lists = $(".list"),
            posts = $(".post");


        for (let z = 0; z < lists.length; z++) {

            if (num == posts[z].getAttribute("data-num")) {

                lists[z].setAttribute("isOn", true);


                var timer3 = setTimeout(() => {
                    posts[z].setAttribute("isOn", true);
                    posts[z].setAttribute("animation", "in");

                    time_if = true;
                    // clearTimeout(timer3);
                }, 500);
            } else {

                lists[z].setAttribute("isOn", false);
                posts[z].setAttribute("animation", "out");

                posts[z].getAttribute("isOn") != "false" ?
                    timer2 = setTimeout(() => {
                        posts[z].setAttribute("isOn", "false");

                        // clearTimeout(timer2);
                    }, 499) : "";
            }
        }
    }
}