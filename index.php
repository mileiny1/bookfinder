<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dynamic Book Finder</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
  <h1>📚 Dynamic Book Finder</h1>

  <nav>
    <select id="genreFilter">
      <option value="">All Genres</option>
      <option value="Dystopian">Dystopian</option>
      <option value="Science Fiction">Science Fiction</option>
      <option value="Classic">Classic</option>
    </select>
  </nav>
</header>

<section id="results"></section>

<script>
  const dropdown = document.getElementById("genreFilter");

  function loadBooks() {
    const genre = dropdown.value;

    fetch(`books.php?genre=${genre}`)
      .then(res => res.json())
      .then(data => {
        const container = document.getElementById("results");
        container.innerHTML = "";

        if (data.length === 0) {
          container.innerHTML = "<p>No books found.</p>";
          return;
        }

        data.forEach(book => {
          container.innerHTML += `
            <div class="card">
              <h3>${book.title}</h3>
              <p><strong>Author:</strong> ${book.author}</p>
              <p><strong>Year:</strong> ${book.year}</p>
              <p><strong>Genre:</strong> ${book.genre}</p>
            </div>
          `;
        });
      });
  }

  dropdown.addEventListener("change", loadBooks);
  loadBooks(); // Load all books on page load



</script>

</body>
<footer>
  <p>© 2025 Dynamic Book Finder | Built by Mileiny Nolasco</p>
</footer>

</html>
