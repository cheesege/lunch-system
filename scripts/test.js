function name(){
  var l = document.getElementByName("food100");
  var idf = l.value;

  let velu = idf;
  storeid = velu.substring(0,1)
  typeid = velu.substring(1,1)
  nameid = velu.substring(2,1)
  console.log(storeid)
}