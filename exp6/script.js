const addButton = document.getElementById("addBtn");
const cartTable = document.getElementById("cart");
let cartItems = [];

addButton.addEventListener("click", function () {
    const title = document.getElementById("title").value;
    const author = document.getElementById("author").value;
    const price = document.getElementById("price").value;

    if (title && author && price) {
        const book = { title, author, price };
        const existingBook = cartItems.find((b) => b.title === title);

        if (existingBook) {
            existingBook.author = author;
            existingBook.price = price;
        } else {
            cartItems.push(book);
        }

        renderCart();
    }
});

function renderCart() {
    cartTable.innerHTML = `
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    `;

    for (let i = 0; i < cartItems.length; i++) {
        const book = cartItems[i];
        const tr = document.createElement("tr");
        tr.innerHTML = `
        <td>${book.title}</td>
        <td>${book.author}</td>
        <td>${book.price}</td>
        <td>
          <button class="delete-button" data-index="${i}">Delete</button>
        </td>
      `;
        cartTable.appendChild(tr);
    }

    const deleteButtons = document.querySelectorAll(".delete-button");
    for (const deleteButton of deleteButtons) {
        deleteButton.addEventListener("click", function () {
            const index = this.getAttribute("data-index");
            cartItems.splice(index, 1);
            renderCart();
        });
    }
}

renderCart();
