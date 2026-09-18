with open('index.php', 'r') as f:
    content = f.read()

start_marker = '<!-- =====================================================\n         INTRODUCTION'
end_marker = '<!-- =====================================================\n         EVENT NUMBERS'

start_idx = content.find(start_marker)
end_idx = content.find(end_marker)

if start_idx != -1 and end_idx != -1:
    new_content = content[:start_idx] + content[end_idx:]
    with open('index.php', 'w') as f:
        f.write(new_content)
    print("Removed intro section.")
else:
    print("Not found.")
