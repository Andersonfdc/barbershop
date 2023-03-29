var search = document.getElementById('pesquisar');

// PESQUISA AO PRECIONAR ENTER
search.addEventListener("keydown", function(event){
    if (event.key === "Enter"){
        searchData();
    }
})

// PESQUISA - INSERE O ID NO LINK
function searchData(){
    window.location = 'admin.php?search='+search.value;
}