function insert(num){
    document.form.textview.value = document.form.textview.value+num
}
function equal(){
    var exp = document.form.textview.value
    if (exp){
        document.form.textview.value = eval(exp)
    }
}
function c(){
    document.form.textview.value = "";
}
function del(){
    var exp = document.form.textview.value;
    document.form.textview.value = exp.substring(0, exp.length-1);
}
function square(){
    document.form.textview.value = Math.pow(document.form.textview.value,2);
}