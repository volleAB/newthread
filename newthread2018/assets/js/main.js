/**
 * 包括 header.js footer.js
 * 
 * 2018.7.17
 * by fig 
 * v1.0.0
 */
headerOnTop();

function headerOnTop() {
    var oDiv1 = document.getElementById('nav'),
        oDiv2 = document.getElementById('_nav'),
        divT = getPos(oDiv1),
        name = oDiv1.className,
        bool1 = true;
    toTop(divT, bool1, oDiv1, oDiv2, name);
    window.onscroll = function() {
        toTop(divT, bool1, oDiv1, oDiv2, name);
    };

    function toTop(divT, bool, oDiv1, oDiv2, name) {
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (scrollTop >= divT) {
            if (bool) {
                oDiv1.className += " onTop";
                bool = false;
            }
            oDiv2.style.display = 'block';
        } else {
            oDiv1.className = name;
            bool = true;
            oDiv2.style.display = 'none';
        }
    }

    function getPos(obj) {
        var t = 0;
        while (obj) {
            t += obj.offsetTop; //它返回当前元素相对于其 offsetParent 元素的顶部的距离。
            obj = obj.offsetParent;
        }
        return t;
    }
};

//搜索。js
//2018.8.22
xxx();

function xxx() {
    var objs = $(".xxx-d"),
        input = $("#search-header");
    for (let z = 0; z < objs.length; z++) {
        objs[z].onclick = function() {
            input.value = this.innerHTML;
        }
    }
}

/*********************************************************************************************************************************** */
function $(str) { //选择器小封装
    if (typeof str === 'string') {
        var name;
        switch (str.charAt(0)) {
            case "#":
                name = str.replace(/^#/, "");
                return document.getElementById(name);
                break;
            case ".":
                name = str.replace(/^\./, "");
                var _ = document.getElementsByClassName(name),
                    list = [];
                for (let z = 0; z < _.length; z++) {
                    list.push(_[z]);
                }
                if (list.length === 1) {
                    return list[0];
                } else {
                    return list;
                }
                break;
            default:
                if (str === 'body') {
                    return document.body;
                } else {
                    return document.getElementsByTagName(str);
                }
                break;
        }
    }
}