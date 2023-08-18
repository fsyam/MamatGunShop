function validasi_jumlah(){
    var inp_jumlah = document.getElementById('jumlah');

    if(inp_jumlah.value <= 0 ){
        alert('Jumlah harus lebih dari 0')
    }
}