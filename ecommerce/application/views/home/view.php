<html>

<head>
    <title>Home Page</title>
</head>

<body>
    <div class="home">
     
        <?php echo '<image class="img-max-width" src="' . PATH_URL_IMG_HOME . 'shipping.png"' . '" alt="' . '"/ >'; ?>
        <?php echo '<image class="img-max-width" src="' . PATH_URL_IMG_HOME . 'banner.jpg"' . '" alt="' . '"/ >'; ?>
        <h1>#HSale</h1>
        <?php echo '<a href="?url=category/view/top/coat"><image class="img-max-width" src="' . PATH_URL_IMG_HOME . 'men.jpg"' . '" alt="' . '"/ ></a>'; ?>
        <?php echo '<a href="?url=category/view/shoes"><image class="img-max-width" src="' . PATH_URL_IMG_HOME . 'banner_shoes_1.jpg"' . '" alt="' . '"/ ></a>'; ?>
        <h1>#HProducts</h1>
        <table id="home-table">
            <tr>
                <td><?php echo '<a href="?url=category/view/top/t-shirt"><image class="img-max-width" src="' . PATH_URL_IMG_HOME . 't_shirt.jpg"' . '" alt="' . '"/ ></a>'; ?></td>
                <td class=" td-padding">
                    <h2>2022 New T-shirt Collection</h2>
                    <h3>Active and Creative</h3>
                </td>
            </tr>
            <tr>
                <td class="td-right td-padding">
                    <h2>Straight-Fit Jeans</h2>
                    <h3>Elevate your look with the latest H's jeans</h3>
                </td>
                <td><?php echo '<a href="?url=category/view/bottom/jeans"><image class="img-max-width" src="' . PATH_URL_IMG_HOME . 'jeans.jpeg"' . '" alt="' . '"/ ></a>'; ?></td>
            </tr>
            <tr>
                <td><?php echo '<a href="?url=category/view/shoes"><image class="img-max-width" src="' . PATH_URL_IMG_HOME . 'shoes3.jpg"' . '" alt="' . '"/ ></a>'; ?></td>
                <td class=" td-padding">
                    <h2>Unifactor Running Shoes</h2>
                    <h3>All styles and colours available in the online store.</h3>
                </td>
            </tr>
            <tr>
                <td class="td-right td-padding">
                    <h2>2022 Autumn/Winter Collection</h2>
                    <h3>Available online + in select stores 9/27 mid-morning ET</h3>
                </td>
                <td><?php echo '<a href="?url=category/view/top/coat"><image class="img-max-width" src="' . PATH_URL_IMG_HOME . 'coat.png"' . '" alt="' . '"/ ></a>'; ?></td>
            </tr>
        </table>


    </div>
</body>

</html>


<style>
    .home {
        text-align: center;
    }

    .img-max-width {
        max-width: 100%;
    }

    h1 {
        margin: 50px;
        font-style: italic;
        color: #1d1182c9;
        font-size: 40px;
    }

    h3 {
        font-style: italic;
        font-weight: normal;
    }

    .td-right {
        text-align: right;
    }

    .td-padding {
        padding: 0 20px;

    }
</style>