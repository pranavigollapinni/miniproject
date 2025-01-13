// Wait for the DOM content to load
document.addEventListener('DOMContentLoaded', function () {
    // Fetch posts from the server
    fetch('https://api.example.com/posts')
        .then(response => response.json())
        .then(posts => {
            // Get the container element
            const postsContainer = document.getElementById('posts-container');

            // Clear any existing content
            postsContainer.innerHTML = '';

            // Loop through the posts and create HTML elements for each post
            posts.forEach(post => {
                const postElement = document.createElement('div');
                postElement.classList.add('post');
                postElement.innerHTML = `
                    <h3>${post.title}</h3>
                    <p>${post.body}</p>
                    <img src="${post.imageUrl}" alt="${post.title}">
                `;
                postsContainer.appendChild(postElement);
            });
        })
        .catch(error => console.error('Error fetching posts:', error));
});
