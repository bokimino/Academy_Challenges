
function Book(title, author, maxPages, onPage) {
    this.title = title;
    this.author = author;
    this.maxPages = maxPages;
    this.onPage = onPage;
}


Book.prototype.isRead = function () {
    return this.onPage === this.maxPages;
};

const books = [
    new Book('The Hobbit', 'J.R.R. Tolkien', 200, 60),
    new Book('Harry Potter', 'J.K.Rowling', 250, 150),
    new Book('50 shades of grey', 'E.L. James', 150, 150),
    new Book('Don Quixote', 'Miquel de Cervantes', 350, 300),
    new Book('Hamlet', 'William Shakespeare', 550, 550),
];

const bookInfo = document.getElementById('bookInfo');
const statsDisplay = document.getElementById('statsDisplay');
const bookTable = document.getElementById('bookTable');
const bookForm = document.getElementById('bookForm');

function updateBookList() {
    bookInfo.innerHTML = '';
    statsDisplay.innerHTML = '';
    bookTable.innerHTML = '';

    books.forEach((book) => {

        const infoItem = document.createElement('li');
        infoItem.textContent = `${book.title} by ${book.author}`;
        bookInfo.appendChild(infoItem);


        const statusItem = document.createElement('li');
        if (book.isRead()) {
            statusItem.innerHTML = `You already read "${book.title}" by ${book.author}`;
            statusItem.style.color = 'green';
        } else {
            statusItem.innerHTML = `You still need to read "${book.title}" by ${book.author}`;
            statusItem.style.color = 'red';
        }
        statsDisplay.appendChild(statusItem);


        const row = bookTable.insertRow();
        const titleCell = row.insertCell(0);
        titleCell.textContent = book.title;
        const authorCell = row.insertCell(1);
        authorCell.textContent = book.author;
        const maxPagesCell = row.insertCell(2);
        maxPagesCell.textContent = book.maxPages;
        const onPageCell = row.insertCell(3);
        onPageCell.textContent = book.onPage;
        const progressCell = row.insertCell(4);
        const progressBar = document.createElement('div');
        progressBar.className = 'progress-bar';
        const progressFill = document.createElement('div');
        progressFill.className = 'progress-bar-fill';
        const percentage = (book.onPage / book.maxPages) * 100;
        progressFill.style.width = percentage + '%';
        const fixPercentage = percentage.toFixed();
        progressFill.innerHTML = fixPercentage + '%';

        progressBar.appendChild(progressFill);
        progressCell.appendChild(progressBar);
    });
}

bookForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const title = document.getElementById('title').value;
    const author = document.getElementById('author').value;
    const maxPages = parseInt(document.getElementById('maxPages').value);
    const onPage = parseInt(document.getElementById('onPage').value);
    books.push(new Book(title, author, maxPages, onPage));
    updateBookList();
    bookForm.reset();
});

updateBookList();
