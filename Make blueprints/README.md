# README

## Overview

This project contains three interconnected automations designed to streamline and enhance data collection and processing. The automations are as follows:

1. **Telegram Bot for Training AI (`telegramBot2TrainAI.json`)**:
    - This automation sets up a Telegram bot that interacts with users to gather data. The bot collects user inputs and responses, which are then used to train AI models. It ensures that the data collected is relevant and structured for further processing. The data is summarized, formatted and stored in a Google Sheet with information about in which section of the main knowledge bais for the AI assitant should be placed, with the keywords and links in markdown format.

2. **Web Scraping (`webScrapping.json`)**:
    - This automation performs web scraping to gather data from an online source when the content sent to Telegram bot is only a link. It extracts relevant information from websites, which can include text, images, and other media. The scraped data is then sent to a webhook to be analyzed by next automation.

3. **Summarizing Web Scraping Data (`summarizeWebScrapping.json`)**:
    - This automation takes the data collected from the web scraping process and summarizes it. It processes the raw data to generate concise and meaningful summaries, making it easier to understand and utilize the information on the AI knowledge base.

## Workflow

The three automations work together in the following workflow:

1. The **Telegram Bot** collects data from users, which is then used to train AI models.
2. The **Web Scraping** automation gathers additional data from online sources to supplement the user-provided data.
3. The **Summarizing Web Scraping Data** automation processes the scraped data to create summaries, which are then used to enhance the AI models further.

By integrating these automations, the project ensures a comprehensive and efficient data collection and processing pipeline, ultimately improving the accuracy and effectiveness of the AI models.

## Improvements and other ideas
- Use an OCR model to allow also sending images and converting its content into text, for summarizing and adding it to the knowledge base much easier when the Telegram Bot message contains an attachment.
- Create a new automation to scrape news and institutional webpages in order to automatically find, analyze and format financial aids for DANA affecteds.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.