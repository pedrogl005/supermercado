import pyautogui
import time
import pyperclip

i = 0

time.sleep(3)

while (i != 10):
    
    
    pyautogui.hotkey('Ctrl', 't')
    pyautogui.click(394, 49)
    pyperclip.copy('https://www.youtube.com/')
    pyautogui.hotkey('Ctrl', 'v')
    pyautogui.hotkey('enter')
    i = i + 1