const inputBox = document.getElementById('input-box');
const copyBtn = document.getElementById('copy-button');

    function copyId(){
        inputBox.select();
        document.execCommand("copy");
        swal.fire(
          'success',
          'Copy Successfully',
          'success'
        )
    }