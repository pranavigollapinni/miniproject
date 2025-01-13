<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Dynamic Bucket List</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('assets/img/this.jpg'); /* Replace 'your-background-image.jpg' with your image file */
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }

  h1 {
    color: rgba(255, 255, 255, 0.7); /* 70% opaque white */
    text-align: center;
    padding: 20px 0;
  }

  #bucketForm {
    background-color: rgba(255, 255, 255, 0.7); /* 70% opaque white */
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }

  #bucketItem {
    width: 70%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
  }

  #bucketItem:focus {
    outline: none;
    border-color: #007bff;
  }

  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button:hover {
    background-color: #0056b3;
  }

  ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  li {
    background-color: rgba(255, 255, 255, 0.7); /* 70% opaque white */
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    color: rgba(0, 0, 0, 0.7); /* 70% opaque black */
  }

  .delete-btn {
    margin-left: 10px;
    background-color: #dc3545;
  }

  .delete-btn:hover {
    background-color: #c82333;
  }

  #deleteAllBtn {
    padding: 10px 20px;
    background-color: #dc3545;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    margin: 20px auto;
  }

  #deleteAllBtn:hover {
    background-color: #c82333;
  }
</style>
</head>
<body>

<h1>My Dynamic Bucket List</h1>

<form id="bucketForm">
  <input type="text" id="bucketItem" placeholder="Enter your bucket list item">
  <button type="submit">Add</button>
</form>

<button id="deleteAllBtn">Delete All</button>

<ul id="bucketList">
  <!-- List items will be added here dynamically -->
</ul>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('bucketForm');
  const input = document.getElementById('bucketItem');
  const list = document.getElementById('bucketList');
  const deleteAllBtn = document.getElementById('deleteAllBtn');

  // Load existing items from localStorage
  let storedItems = JSON.parse(localStorage.getItem('bucketItems')) || [];
  storedItems.forEach(item => {
    addItemToList(item);
  });

  form.addEventListener('submit', function(event) {
    event.preventDefault();
    const newItem = input.value.trim();
    if (newItem !== '') {
      addItemToList(newItem);
      storedItems.push(newItem); // Add new item to stored items array
      localStorage.setItem('bucketItems', JSON.stringify(storedItems)); // Save to localStorage
      input.value = '';
    }
  });

  deleteAllBtn.addEventListener('click', function() {
    while (list.firstChild) {
      list.removeChild(list.firstChild);
    }
    localStorage.removeItem('bucketItems');
    storedItems = []; // Clear stored items array
  });

  function addItemToList(item) {
    const li = document.createElement('li');
    li.textContent = item;

    const deleteBtn = document.createElement('button');
    deleteBtn.textContent = 'Delete';
    deleteBtn.className = 'delete-btn';
    deleteBtn.addEventListener('click', function() {
      deleteItem(li);
    });

    li.appendChild(deleteBtn);
    list.appendChild(li);
  }

  function deleteItem(item) {
    const itemText = item.textContent.trim();
    const index = storedItems.indexOf(itemText);
    if (index !== -1) {
      storedItems.splice(index, 1);
      localStorage.setItem('bucketItems', JSON.stringify(storedItems)); // Update localStorage
    }
    item.remove();
  }
});
</script>

</body>
</html>
