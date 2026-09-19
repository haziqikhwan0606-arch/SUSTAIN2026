with open('index.php', 'r') as f:
    content = f.read()

# Find the true end — first </main> plus footer
main_end = content.find('</main>')
footer_block = "\n\n<?php\nrequire_once 'includes/footer.php';\n?>\n"

# Everything up to (but not including) the first section
first_sec = content.find('    <!-- ===', content.find('<main>'))
top = content[:first_sec]

def extract(label, src):
    start = src.find(label)
    if start == -1: return ''
    start = src.rfind('<!-- ===', 0, start)
    end1 = src.find('<!-- ===', start + 10)
    end2 = src.find('</main>', start + 10)
    if end1 == -1: end = end2
    elif end2 == -1: end = end1
    else: end = min(end1, end2)
    return src[start:end]

hero       = extract('HERO', content)
numbers    = extract('EVENT NUMBERS', content)
journey    = extract('CONFERENCE JOURNEY', content)
experience = extract('EXPERIENCE', content)
speakers   = extract('SPEAKERS', content)
impact     = extract('IMPACT / SDGs', content)
gsed       = extract('GSED', content)
final_cta  = extract('FINAL CTA', content)

new_content = (
    top +
    hero +
    numbers +
    journey +
    experience +
    speakers +
    impact +
    gsed +
    final_cta +
    "\n    </section>\n\n</main>\n\n" +
    "<?php\nrequire_once 'includes/footer.php';\n?>\n"
)

# But final_cta already ends with </section> so don't add extra
# Let me check - strip trailing whitespace from final_cta
final_cta_stripped = final_cta.rstrip()

new_content = (
    top +
    hero +
    numbers +
    journey +
    experience +
    speakers +
    impact +
    gsed +
    final_cta_stripped +
    "\n\n</main>\n\n<?php\nrequire_once 'includes/footer.php';\n?>\n"
)

with open('index.php', 'w') as f:
    f.write(new_content)

print("Clean rewrite done.")
