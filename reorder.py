import re

with open('index.php', 'r') as f:
    content = f.read()

# Sections:
# 1. Hero (id="home")
# 2. Intro (id="about")
# 3. Data Table (class="data-table section")
# 4. Journey (id="journey")
# 5. Tracks (id="tracks")
# 6. Experience (id="experience")
# 7. Speakers (id="speakers")
# 8. Impact (id="impact")
# 9. GSED (id="gsed")
# 10. Venue (id="venue")
# 11. Final CTA (class="final-cta section")

# Let's extract the blocks.
def extract_block(text, start_marker, end_marker=None):
    start_idx = text.find(start_marker)
    if start_idx == -1: return "", text
    
    if end_marker:
        end_idx = text.find(end_marker, start_idx)
        if end_idx == -1:
            block = text[start_idx:]
            rest = text[:start_idx]
        else:
            block = text[start_idx:end_idx]
            rest = text[:start_idx] + text[end_idx:]
    else:
        # Assuming end of section is before the next <!-- ===
        next_section = text.find('<!-- ===', start_idx + 10)
        if next_section == -1:
            next_section = text.find('</main>', start_idx)
        block = text[start_idx:next_section]
        rest = text[:start_idx] + text[next_section:]
    return block, rest

# Remove Tracks
tracks_block, content = extract_block(content, '<!-- =====================================================\n         CONFERENCE TRACKS')

# Extract Experience
exp_block, content = extract_block(content, '<!-- =====================================================\n         EXPERIENCE')

# Find where to insert Experience: after Data Table
data_table_end = content.find('</section>', content.find('<section class="data-table section">')) + 10

new_content = content[:data_table_end] + '\n\n' + exp_block + content[data_table_end:]

# Replace placeholder speakers with actual speakers from includes/speakers_data.php
# Wait, I'll do speakers in another step.

with open('index.php', 'w') as f:
    f.write(new_content)

print("Reordered Experience and removed Tracks.")
