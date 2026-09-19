import re

with open('index.php', 'r') as f:
    content = f.read()

# Define section markers
markers = [
    '<!-- ===',
    '</main>'
]

def get_block(name):
    # find comment that contains the name
    start = content.find(name)
    if start == -1: return ""
    # track back to the '<!-- ==='
    start = content.rfind('<!-- ===', 0, start)
    
    # find next '<!-- ===' or '</main>'
    end1 = content.find('<!-- ===', start + 10)
    end2 = content.find('</main>', start + 10)
    if end1 == -1: end = end2
    elif end2 == -1: end = end1
    else: end = min(end1, end2)
    
    return content[start:end]

hero = get_block('HERO')
journey = get_block('CONFERENCE JOURNEY')
numbers = get_block('EVENT NUMBERS')
experience = get_block('EXPERIENCE')
speakers = get_block('SPEAKERS')
impact = get_block('IMPACT / SDGs')
gsed = get_block('GSED')
final_cta = get_block('FINAL CTA')

# Reconstruct main content
new_main = hero + journey + numbers + experience + speakers + impact + gsed + final_cta

# Extract top (up to HERO) and bottom (from </main>)
top = content[:content.find('<!-- ===', content.find('<main>'))]
bottom = content[content.find('</main>'):]

with open('index.php', 'w') as f:
    f.write(top + new_main + bottom)

print("Reordered successfully and removed VENUE.")
