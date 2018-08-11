

// the array to be sorted
var list = ['Delta', 'alpha', 'CHARLIE', 'bravo'];
console.log(list);
list.sort();
console.log(list);
let list1 = list.map(function(el){
  return el.toLowerCase();
})
console.log(list1);
list1.sort(function(a ,b){
  if (a > b) {
    return -1;
  }
  if (a < b) {
    return 1;
  }
  return 0;
});
console.log(list1);
console.log('---');
// temporary array holds objects with position and sort-value
var mapped = list1.map(function(el, i) {
  return { index: i, value: el };
})
console.log(mapped);
console.log(mapped[0]);
console.log('---');
// sorting the mapped array containing the reduced values
mapped.sort(function(a, b) {
  if (a.value > b.value) {
    return 1;
  }
  if (a.value < b.value) {
    return -1;
  }
  return 0;
});
mapped.map(function(el, i){
  console.log(mapped[i]);
})
console.log('---');
//console.log(mapped[0],mapped[1],mapped);
// container for the resulting order
/*var result = mapped.map(function(el){
  console.log(el);
  return list1[el.index];
});
*/
var result = [];
 result = mapped.map(function(el,i){
  console.log('the result:' + el );
  return result[i] = el.value;
});
console.log(result);
