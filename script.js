// Check if the browser supports the History API
if (window.history && window.history.replaceState) {
    // Remove the ".html" extension from the URL when the page loads
    if (window.location.pathname.substr(-5) === '.html' && window.location.pathname.length > 5) {
      var urlWithoutExtension = window.location.pathname.slice(0, -5);
      window.history.replaceState(null, null, urlWithoutExtension);
    }
  
    // Use the History API to remove the ".html" extension when a link is clicked
    document.addEventListener('click', function (event) {
      var target = event.target;
      if (target.tagName === 'A' && target.href.substr(-5) === '.html' && target.getAttribute('target') !== '_blank') {
        event.preventDefault();
        var urlWithoutExtension = target.href.slice(0, -5);
        window.history.pushState(null, null, urlWithoutExtension);
        // Update the content on the page based on the new URL
        loadContent(urlWithoutExtension);
      }
    });
  }
  
  // Function to load content based on the URL without the ".html" extension
  function loadContent(url) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url + '.html', true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.documentElement.innerHTML = xhr.responseText;
        // Execute any necessary JavaScript for the newly loaded page
        var scripts = document.getElementsByTagName('script');
        for (var i = 0; i < scripts.length; i++) {
          eval(scripts[i].innerHTML);
        }
      }
    };
    xhr.send();
  }
  