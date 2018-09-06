// /**
//  * 新闻中心。js
//  * 2018.8.2
//  * by fig
//  */
// window.onload = function() {

//     changePage();
//     var lis = $(".option");
//     for (let z = 0; z < lis.length; z++) {
//         lis[z].onclick = function() {
//             changePage(this.getAttribute("data-num"), true);
//         };
//     }

//     var dots = $(".dot-five");
//     if (!dots.length) {
//         $(".dots").style = "display:none;"
//     } else {
//         for (let z = 0; z < dots.length; z++) {
//             dots[z].onclick = function() {
//                 changeDot(z, "five");
//             };
//         }
//         $("#next").onclick = function() {
//             sx(1, "five");
//         };
//         $("#previous").onclick = function() {
//             sx(-1, "five");
//         };
//     }
//     $("#after-three").onclick = function() {
//         sx(1, "three");
//     };
//     $("#before-three").onclick = function() {
//         sx(-1, "three");
//     };
//     $("#after-four").onclick = function() {
//         sx(1, "four");
//     };
//     $("#before-four").onclick = function() {
//         sx(-1, "four");
//     };

//     // maoDiang("three");
//     $("#backTop").onclick = function() {
//         window.scrollTo({
//             top: 0,
//             behavior: "smooth"
//         });
//     }
// };
// window.onhashchange = changePage;

// function getPos(obj) {
//     var t = 0;
//     while (obj) {
//         t += obj.offsetTop; //它返回当前元素相对于其 offsetParent 元素的顶部的距离。
//         obj = obj.offsetParent;
//     }
//     return t;
// }

// function changePage(num = "one", bool = false) {
//     var aims = getPurpose(),
//         list = {
//             "one": "团队新闻",
//             "two": "例会动态",
//             "three": "文化活动",
//             "four": "项目快报",
//             "five": "交流合作"
//         };

//     bool ? aims = num : ""; //点击 .option 赋值 
//     window.scrollTo({
//         top: getPos($("#js_" + aims)) - 100,
//         behavior: "smooth"
//     });

//     switch (aims) {
//         case "one":
//             $(".thisPage").innerHTML = list.one;
//             changeClassName(1);
//             break;
//         case "two":
//             $(".thisPage").innerHTML = list.two;
//             changeClassName(2);
//             break;
//         case "three":
//             $(".thisPage").innerHTML = list.three;
//             changeClassName(3);
//             break;
//         case "four":
//             $(".thisPage").innerHTML = list.four;
//             changeClassName(4);
//             break;
//         case "five":
//             $(".thisPage").innerHTML = list.five;
//             changeClassName(5);
//             break;

//         default:
//             break;
//     }

//     function changeClassName(num) {
//         let arr = $(".option");
//         for (let z = 0; z < arr.length; z++) {
//             arr[z].className = "option";
//         }
//         arr[num - 1].className += " on";
//     }

//     function getPurpose() { //获取锚点
//         var url = window.location.href,
//             ret = "";
//         ret = url.slice(url.indexOf("#"));
//         ret.slice(0, 1) !== "#" ? ret = "one" : ret = ret.slice(1);
//         return ret;
//     }
// }

// function sx(num, mut = "") {
//     var pageBoxs = $(".page-box-" + mut),
//         _bool = true,
//         _z;
//     for (let z = 0; z < pageBoxs.length; z++) {
//         if (pageBoxs[z].getAttribute("isHide") == "false" && _bool) {
//             z + num >= pageBoxs.length ? _z = 0 : z + num < 0 ? _z = pageBoxs.length - 1 : _z = z + num;
//             changeDot(_z, mut);
//             _bool = false;
//         }
//     }

// }

// function changeDot(num = 0, mut = "") {
//     var postLists = $(".page-box-" + mut),
//         dots = $(".dot-" + mut);
//     for (let z = 0; z < postLists.length; z++) {
//         const dot = dots[z],
//             postList = postLists[z];
//         if (z == num) {
//             setTimeout(() => {
//                 dot ? dot.setAttribute("isHide", false) : "";
//                 postList.setAttribute("isHide", false);
//                 postList.setAttribute("animation", "in");
//             }, 500);
//         } else if (postList.getAttribute("isHide") != "ture") {
//             postList.setAttribute("animation", "out");
//             setTimeout(() => {
//                 dot ? dot.setAttribute("isHide", true) : "";
//                 postList.setAttribute("isHide", true);
//             }, 499);

//         }
//     }
// }