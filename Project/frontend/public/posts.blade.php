<?php include_once 'home.blade.php'; ?>
<br>
<br>
<div class="post-container">
  <h2 class="post"> POSTS TABLE</h2>
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Comments</th>
      </tr>
    </thead>
  </table>
</div>

<style>
  .post-container{
    box-shadow: 0 5px 7px;
    width: 500px;
    border-radius: 7px;
    margin: auto;
    
  }
 
  .post{ 
    text-align: center;
    background-color: rgb(96, 96, 20);
    color: white; 
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
    
  }
  table{
    padding: 10px;
    display: flex;
    justify-content: center;
   
  }
 
  th{
    padding: 10px;
    background-color: white;
    font-family: Arial, Helvetica, sans-serif;
    
  }
</style>