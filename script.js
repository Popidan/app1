function CheckLen(obj, minLen){
    curLen = obj.value.lenght;
    originalColor = obj.style.borderColor;
    if (curLen < minLen){
        obj.style.borderColor="red";
    }
    else{
        obj.style.borderColor=originalColor;
    }
}
function verPasiuni(obj){
    let lastChar = "";
    obj.value.forEach(element => {
        lastChar = element;
    });
    console.log(lastChar);
}