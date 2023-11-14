<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/othneildrew/Best-README-Template">
    <img src="images/logo.jpg" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">FunnyQuoteLib</h3>

  <p align="center">
    An awesome README template to discover this project!
    <br />
    <a href="https://github.com/othneildrew/Best-README-Template"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/othneildrew/Best-README-Template">View Demo</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Report Bug</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

Welcome to FunnyQuoteLib, the PHP library that injects a dose of humor into your web applications! Our mission is to bring a lively and delightful touch to your admin interfaces by incorporating randomly selected, witty quotes. 

Picture a world where your users are greeted with funny and inspiring quotes every time they interact with your application. FunnyQuoteLib makes it easy to seamlessly integrate humorous quotes, enhancing the user experience and adding a playful element to your project.

Transform the mundane into the extraordinary by infusing elements of surprise into your pages. FunnyQuoteLi offers a straightforward and effective solution to brighten up your interfaces, creating a light-hearted and entertaining atmosphere. Make each user interaction a memorable experience with our library, adding a dash of humor to your code. Get ready to astonish your users and make your project as enjoyable as it is functional with FunnyQuoteLib!

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

[![PHP][PHP-shield]][PHP-url]

[![HEART][HEART-shield]][HEART-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

Before you begin, ensure that you have the following prerequisites installed:

    PHP (version ^7.1)
    Composer 

### Installation

1. Install FunnyQuoteLi using Composer:
   ```sh
   composer require ol.arno/funny-quote-lib
   ```
2. Once the installation is complete, include the autoloader in your project:
   ```php
   require_once 'vendor/autoload.php';
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

1. Create an instance of the FunnyQuoteLib class:
    ```php
    use FunnyQuoteLib\FunnyQuoteLibrary;

    $funnyQuoteLib = new FunnyQuoteLibrary();
    ```
2. Retrieve a random funny quote:
    ```php
    $quote = $funnyQuoteLib->getRandomQuote();
    ```
3. Customize the display to fit your application's needs.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- ROADMAP -->
## Roadmap

- [ ] **Add Changelog**
  - Keep track of version changes, bug fixes, and new features in the Changelog to enhance transparency and user understanding.

- [ ] **Add Back to Top Links**
  - Implement convenient "Back to Top" links for a smoother and more user-friendly navigation experience.

- [ ] **Multi-language Support**
  - Enable support for multiple languages to cater to a broader audience. This could involve translation efforts and language-specific configurations.

- [ ] **Explore New Ways to Generate Quotes**
  - Investigate innovative methods for generating quotes, potentially incorporating external APIs, user contributions, or dynamic content to keep the quotes fresh and engaging.

- [ ] **Documentation Updates**
  - Ensure that the documentation is comprehensive and up-to-date, covering installation, usage, configuration, and any advanced features. Clear documentation is key for user adoption and contributions.

- [ ] **Unit Tests**
  - Implement a robust suite of unit tests to validate the functionality of your library. This helps maintain stability during development and provides a solid foundation for future updates.

- [ ] **Continuous Integration (CI)**
  - Set up a CI pipeline to automate testing and deployment processes. This ensures that your library remains reliable and consistent across different environments.

- [ ] **Community Engagement**
  - Foster a community around your project by encouraging discussions, addressing issues promptly, and welcoming contributions. A vibrant community can lead to valuable insights and improvements.

- [ ] **User Feedback Mechanism**
  - Establish a feedback mechanism, such as a survey or user forum, to gather insights from users. This can inform future development and ensure that your library meets the evolving needs of its users.



See the [open issues](https://github.com/olarno/funnyQuoteLibrary/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Thank you for considering contributing to FunnyQuoteLi! We welcome contributions from the community to help make this project even better. Whether you're reporting a bug, suggesting an enhancement, or contributing code, your involvement is highly valued.

### Ways to Contribute

1. **Bug Reports:**
   - If you encounter a bug or unexpected behavior, please open an [issue](https://github.com/olarno/funnyQuoteLibrary/issues) on GitHub. Provide detailed information about the issue, including steps to reproduce and your environment.

2. **Feature Requests:**
   - Have an idea for a new feature or improvement? Feel free to submit a [feature request](https://github.com/olarno/funnyQuoteLibrary/issues) on GitHub. We appreciate your feedback and creativity.

3. **Code Contributions:**
   - If you're interested in contributing code, follow these steps:
     - Fork the repository.
     - Create a new branch for your feature or bug fix.
     - Make your changes and submit a pull request (PR) to the `main` branch of the original repository.

4. **Documentation Improvements:**
   - Help us improve our documentation by submitting pull requests for clarifications, corrections, or additional information.


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Your Name - [@your_twitter](https://twitter.com/arno_ol) - arnaudoltra@hotmail.fr

Project Link: [https://github.com/olarno/funnyQuoteLibrary](https://github.com/olarno/funnyQuoteLibrary)

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/olarno/funnyQuoteLibrary?style=for-the-badge
[contributors-url]: https://github.com/olarno/funnyQuoteLibrary/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/olarno/funnyQuoteLibrary?style=for-the-badge
[forks-url]: https://github.com/olarno/funnyQuoteLibrary/network/members
[stars-shield]: https://img.shields.io/github/stars/olarno/funnyQuoteLibrary?style=for-the-badge
[stars-url]: https://github.com/olarno/funnyQuoteLibrary/stargazers
[issues-shield]: https://img.shields.io/github/issues/olarno/funnyQuoteLibrary?style=for-the-badge
[issues-url]: https://github.com/olarno/funnyQuoteLibrary/issues
[license-shield]: https://img.shields.io/github/license/olarno/funnyQuoteLibrary?style=for-the-badge
[license-url]: https://github.com/olarno/funnyQuoteLibrary/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/arnaud-oltra/
[PHP-shield]: https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white
[PHP-url]: https://www.php.net/
[HEART-shield]: https://forthebadge.com/images/badges/built-with-love.svg
[HEART-url]: https://www.linkedin.com/in/arnaud-oltra/