var xttp = new XMLHttpRequest();

xttp.onload = function(){

    var response = JSON.parse(this.responseText);
    console.log(response);
    
    var tableBody = document.getElementById('tableBody');
    
    response.forEach(function(item) {
      var row = document.createElement('tr');
      var id = document.createElement('td');
      var title = document.createElement('td');
      var book_author = document.createElement('td');
      var pages = document.createElement('td');
      var price = document.createElement('td');
 
      
      id.textContent = item.id;
      title.textContent = item.title;
      book_author.textContent = item.book_author;
      pages.textContent = item.pages;
      price.textContent = item.price;
      
      row.appendChild(id);
      row.appendChild(title);
      row.appendChild(book_author);
      row.appendChild(pages);
      row.appendChild(price);
      
      tableBody.appendChild(row);
    });
 
};

xttp.open('GET', 'http://localhost//Assignment_IntegrativeProgramming/assignment1/phpnative.php');
xttp.send();
