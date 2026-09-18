with open('index.php', 'r') as f:
    content = f.read()

def get_section(content, label):
    """Extract a section block by its comment label."""
    start = content.find(label)
    if start == -1:
        return '', content
    # Walk back to find the opening '<!-- ===...'
    start = content.rfind('<!-- ===', 0, start)
    # Find next section or </main>
    end1 = content.find('<!-- ===', start + 10)
    end2 = content.find('</main>', start + 10)
    if end1 == -1:
        end = end2
    elif end2 == -1:
        end = end1
    else:
        end = min(end1, end2)
    return content[start:end], start, end

# Extract everything before the first section block
first_section_start = content.find('    <!-- ===', content.find('<main>'))
top = content[:first_section_start]

# Extract each section
def extract(label):
    start = content.find(label)
    if start == -1: return ''
    start = content.rfind('<!-- ===', 0, start)
    end1 = content.find('<!-- ===', start + 10)
    end2 = content.find('</main>', start + 10)
    if end1 == -1: end = end2
    elif end2 == -1: end = end1
    else: end = min(end1, end2)
    return content[start:end]

hero       = extract('HERO')
numbers    = extract('EVENT NUMBERS')
journey    = extract('CONFERENCE JOURNEY')
experience = extract('EXPERIENCE')
speakers   = extract('SPEAKERS')
impact     = extract('IMPACT / SDGs')
gsed       = extract('GSED')
final_cta  = extract('FINAL CTA')

bottom = content[content.find('</main>'):]

# Target order: HERO → DATA TABLE (numbers) → JOURNEY → EXPERIENCE → SPEAKERS → IMPACT → GSED → FINAL CTA
new_body = hero + numbers + journey + experience + speakers + impact + gsed + final_cta

with open('index.php', 'w') as f:
    f.write(top + new_body + bottom)

print("Done! Order: HERO > DATA TABLE > JOURNEY > EXPERIENCE > SPEAKERS > IMPACT > GSED > FINAL CTA")
