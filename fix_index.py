with open('index.php', 'r') as f:
    content = f.read()

first_main_end = content.find('</main>')

# The footer include is right after </main>
footer_str = """
<?php
require_once 'includes/footer.php';
?>
"""

if first_main_end != -1:
    new_content = content[:first_main_end + 7] + "\n\n" + footer_str
    with open('index.php', 'w') as f:
        f.write(new_content)
    print("Fixed.")
