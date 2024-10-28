from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager

# Ustawienia przeglądarki
options = webdriver.ChromeOptions()
options.add_argument("--headless")  # Opcjonalnie: tryb bez okna

# Inicjalizacja sterownika
driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

# Otwórz stronę
driver.get("http://192.168.1.31/strona.php")

# Pobierz zawartość strony
page_content = driver.page_source

a_tags = driver.find_elements(By.TAG_NAME, "a")
sub_pages = []
for a in a_tags:
    sub_pages.append(a.get_attribute('href'))

print(sub_pages)
titles = []

for sub_page in sub_pages:
    driver.get(sub_page)
    title = driver.find_elements(By.TAG_NAME, "h2")
    titles.append(title)

print(titles)
# Zamknij przeglądarkę
driver.quit()