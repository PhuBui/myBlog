// alert('array');
const items = ['A', 'b', 'c', 'd', 'assa', '1'];
let mangKetQua = ['pho', 'php'];
console.log(items);
function searchItem(key) {}
searchItem('A');

alert(items.length);

console.log(items.length);

function search(value) {
    for (let i = 0; i < items.length; i++) {
        if (value === items[i]) {
            return 'tim thay';
        }
    }
    return 'khong tim thay';
}

console.log(search('A'));