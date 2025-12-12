# Dynamic Book Finder (PHP + XML + AJAX)

## Files included
- index.html — front-end UI + AJAX (fetch)
- books.php  — PHP endpoint that parses books.xml and returns JSON
- books.xml  — sample XML data with 8 books
- styles.css — simple responsive styling
- README.md  — this file

## How to run locally (VS Code)
1. Open the folder in VS Code.
2. If you have PHP installed, run in terminal:
   ```
   php -S localhost:8000
   ```
3. Open `http://localhost:8000/index.html` in your browser.

## How to deploy to a free PHP host
1. Zip the files and upload to your host (public_html or root).
2. Ensure `books.xml` is readable by the server.
3. Access the site URL (e.g., `https://yourhost.example/index.html`).

## Reflection (copy this into your assignment post)
**What I built**  
A Dynamic Book Finder that reads a local `books.xml` file, parses it on the server using PHP (`simplexml_load_file()`), and serves filtered results to the front-end via AJAX (`fetch`). The UI allows searching by title/author, filtering by genre and year, and updates results without reloading the page.

**What I learned**  
- How to use PHP’s `simplexml_load_file()` to parse XML and convert nodes to JSON-friendly arrays.  
- How to design a small AJAX API (query params → JSON) and how to call it with `fetch`.  
- UI/UX considerations for dynamic filtering: debounce searches, show loading state, and graceful "no results".  
- Deploying PHP apps on free hosts and simple CORS/permission issues.

**Possible improvements**  
- Add pagination, server-side caching, cover images, and better accessibility.

