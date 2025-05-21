// Function to load external HTML into a specified element
function loadHTML(elementId, url) {
    fetch(url)
      .then(response => {
        if (!response.ok) {
        throw new Error("Could not fetch " + url + ":header.html " + response.statusText);
        }
        return response.text();
      })
      .then(data => {
        document.getElementById(elementId).innerHTML = data;
      })
      .catch(error => {
        console.error('Error loading HTML:', error);
      });
  }
  
  // Load header and footer
  document.addEventListener('DOMContentLoaded', () => {
    loadHTML('header', 'global/header.html');
    loadHTML('footer', 'global/footer.html');
  });