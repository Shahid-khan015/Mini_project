<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background: #35424a;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px 0;
        }
        .video-card {
            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: calc(30% - 20px);
            transition: transform 0.2s;
        }
        .video-card:hover {
            transform: scale(1.05);
        }
        .video-card video {
            width: 100%;
            border-radius: 5px 5px 0 0;
        }
        .video-card h3 {
            margin: 10px;
            font-size: 1.2em;
        }
        .video-card p {
            margin: 10px;
            color: #555;
        }
        .video-card video{
            height:200px;
        }
        @media (max-width: 768px) {
            .video-card {
                width: calc(48% - 20px);
            }
        }
        @media (max-width: 480px) {
            .video-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Video Gallery</h1>
    </div>
    <div class="container" id="videoContainer">
        <!-- Videos will be dynamically loaded here -->
    </div>

    <script>
        const apiKey = 'xDlhtiBejC3IczbyMkkdxDKOBgTtzld5ZCt4RFTkWQtbAkMdWmzIZKsE'; // Replace with your Pexels API Key
        const url = 'https://api.pexels.com/videos/popular?per_page=10'; // Fetch popular videos

        async function fetchVideos() {
            const response = await fetch(url, {
                method: 'GET',
                headers: {
                    'Authorization': apiKey
                }
            });
            const data = await response.json();
            const videoContainer = document.getElementById('videoContainer');

            data.videos.forEach(video => {
                const videoCard = document.createElement('div');
                videoCard.className = 'video-card';
                videoCard.innerHTML = `
                    <a href="full_video.php?link=${video.video_files[0].link}"><video controls>
                        <source src="${video.video_files[0].link}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video></a>
                    <h3>${video.name}</h3>
                    <p>${video.description}</p>
                `;
                videoContainer.appendChild(videoCard);
            });
        }

        fetchVideos();
    </script>
</body>
</html>