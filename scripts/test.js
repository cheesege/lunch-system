console.log("a");


function name(){
  console.log("a");
  var l = document.getElementByName("food100").value;

  var index = l.selectedIndex;
  let storeid = l.options[index].value.substring(0,1);
  let typeid = velu.substring(1,1);
  let nameid = velu.substring(2,1);
  console.log(storeid);
}