/**
 * 团队招新。js
 * 2018.8.15
 * by fig
 */
window.onload = function() {


    $("#after").onclick = function() {
        sx(1);
    };
    $("#before").onclick = function() {
        sx(-1);
    };


};

function sx(num) {
    var pageBoxs = $(".page-box"),
        _bool = true,
        _z;
    for (let z = 0; z < pageBoxs.length; z++) {
        if (pageBoxs[z].getAttribute("isHide") == "false" && _bool) {
            z + num >= pageBoxs.length ? _z = 0 : z + num < 0 ? _z = pageBoxs.length - 1 : _z = z + num;
            changeDot(_z);
            _bool = false;
        }
    }

}

function changeDot(num = 0) {
    var postLists = $(".page-box"),
        dots = $(".dot");
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