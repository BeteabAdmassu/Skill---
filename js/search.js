var search = document.getElementById('search');
search.placeholder=$_GET['search'];

$('.filter-button').change(()=>{
    var category = $('.filter-button option:selected').text();
    $('.lesson').each((index,item) => {
        $(item).show();
        if(category==='Show All'){
            return;
        }
        else if($(item).children(".category").text()!=category){
            $(item).hide();
        }
    });
})