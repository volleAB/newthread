window.onload = function() {
    changePage();
    var lis = $(".option"),
        lists = $(".list");
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
};
window.onhashchange = changePage;


function changePage(num = "one", bool = false) {
    var aims = getPurpose(),
        list = {
            "one": "团队介绍",
            "two": "组织架构",
            "three": "里程碑",
            "four": "导师力量",
            "five": "团队分站",
            "six": "小组介绍"
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
        case "five":
            $(".thisPage").innerHTML = list.five;
            changeClassName(5);
            break;
        case "six":
            $(".thisPage").innerHTML = list.six;
            changeClassName(6);
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

                        clearTimeout(timer2);
                    }, 499) : "";
            }
        }
    }
}