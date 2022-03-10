alert('mang');
const items = ['A','b','c','d'];
console.log(items);
function searchItems(value){
    for(i=0;i<=items.length;i++){
        if(value === items[i]){
            console.log(value);
            return 'tim thay';
        }
       
    }
    return 'ko tim thay';

}
console.log(searchItems('b'));