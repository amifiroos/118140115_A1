var dataBarang = [
    "Buku",
    "Pensil",
    "Pulpen"
];

function tampilBarang() {
    var listBarang = document.getElementById("list");
    listBarang.innerHTML="";

    for(let i=0;i<dataBarang.length; i++){
        var btnedit = "<a href='#' onclick='editBarang("+i+")'>Edit</a>";
        var btnhapus = "<a href='#' onclick='hapusBarang("+i+")'>Hapus</a>";
    
        listBarang.innerHTML += "<li>" + dataBarang[i] + " ["+btnedit+"|"+btnhapus+"]</li>";
    }
}

function tambahBarang() {
    var input = document.querySelector("input[name=barang]");
    dataBarang.push(input.value);
    tampilBarang();
}

function editBarang(id) {
    var newBarang = prompt("Nama baru : ", dataBarang[id]);
    dataBarang[id]=newBarang;
    tampilBarang();
}

function hapusBarang(id) {
    dataBarang.splice(id, 1);
    tampilBarang();
}

tampilBarang()