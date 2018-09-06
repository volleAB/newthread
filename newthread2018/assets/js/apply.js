var aaa_bool = true;
aaa();

function aaa() {
    document.getElementsByClassName("submit")[0].onclick = function() {
        if (aaa_bool) {
            document.getElementById("apply_form").submit();
            // console.log(123);
            aaa_bool = false;
            alert("成功提交");
        }
    }
}