with open('legacy_index.php', 'r') as f:
    src = f.read()

def extract(label, text):
    pos = text.find(label)
    if pos == -1: return ''
    start = text.rfind('<!-- ===', 0, pos)
    nxt1 = text.find('<!-- ===', start + 10)
    nxt2 = text.find('</main>', start + 10)
    if nxt1 == -1:   end = nxt2
    elif nxt2 == -1: end = nxt1
    else:            end = min(nxt1, nxt2)
    return text[start:end]

hero       = extract('HERO',               src)
journey    = extract('CONFERENCE JOURNEY', src)
experience = extract('EXPERIENCE',         src)
impact     = extract('IMPACT / SDGs',      src)
gsed       = extract('GSED',              src)

# ── DATA TABLE ────────────────────────────────────────────────────────────────
data_table = """\
    <!-- =====================================================
         DATA TABLE
    ====================================================== -->

    <section class="data-table section">

        <div class="container">

            <div class="data-table__grid">

                <div class="data-table__cell">
                    <span class="data-table__label">Speakers</span>
                    <span class="data-table__value">20+</span>
                </div>

                <div class="data-table__cell">
                    <span class="data-table__label">Countries</span>
                    <span class="data-table__value">5</span>
                </div>

                <div class="data-table__cell">
                    <span class="data-table__label">Conference Tracks</span>
                    <span class="data-table__value">8</span>
                </div>

                <div class="data-table__cell">
                    <span class="data-table__label">Delegates Expected</span>
                    <span class="data-table__value">500+</span>
                </div>

            </div>

        </div>

    </section>

"""

# ── JOURNEY with image ────────────────────────────────────────────────────────
journey = journey.replace(
    "                <p>\n                    SUSTAIN 2026 follows the sustainability\n                    transformation journey",
    "                <p>\n                    SUSTAIN 2026 follows the sustainability\n                    transformation journey"
)
# Insert the image div before the closing </div> of journey__intro-right
journey = journey.replace(
    "                    measurable impact.\n                </p>\n\n            </div>",
    "                    measurable impact.\n                </p>\n\n                <div class=\"journey__visual\">\n                    <img src=\"assets/images/conference.jpg\" alt=\"SUSTAIN 2026 Conference\" loading=\"lazy\">\n                </div>\n\n            </div>"
)

# ── SPEAKERS (dynamic) ────────────────────────────────────────────────────────
speakers = """\
    <!-- =====================================================
         SPEAKERS
    ====================================================== -->

    <section class="speakers section" id="speakers">

        <div class="container">

            <div class="section-label">
                <span>05</span>
                <span>SPEAKERS</span>
            </div>

            <div class="speakers__header">
                <h2>
                    Voices shaping
                    <br>
                    <span>the transition.</span>
                </h2>
                <a href="pages/speakers.php" class="text-link">
                    Meet all speakers
                    <span>&#8599;</span>
                </a>
            </div>

            <?php
            require_once 'includes/speakers_data.php';
            if (!empty($speakers)):
            ?>
            <div class="speaker-grid">
                <?php foreach (array_slice($speakers, 0, 4) as $idx => $sp): ?>
                <article class="speaker-card">
                    <div class="speaker-card__image">
                        <?php if (!empty($sp['image'])): ?>
                            <img src="<?= htmlspecialchars($sp['image']) ?>"
                                 alt="<?= htmlspecialchars($sp['name']) ?>"
                                 loading="lazy">
                        <?php else: ?>
                            <div class="speaker-card__placeholder"><span>+</span></div>
                        <?php endif; ?>
                    </div>
                    <div class="speaker-card__content">
                        <div class="speaker-card__meta">
                            <span class="speaker-card__number"><?= str_pad($idx+1,2,'0',STR_PAD_LEFT) ?></span>
                            <?php if (!empty($sp['category'])): ?>
                                <span class="speaker-card__category"><?= htmlspecialchars($sp['category']) ?></span>
                            <?php endif; ?>
                        </div>
                        <h3><?php if (!empty($sp['title'])) echo htmlspecialchars($sp['title']).' '; echo htmlspecialchars($sp['name']); ?></h3>
                        <div class="speaker-card__details">
                            <span class="speaker-card__position"><?= htmlspecialchars($sp['position']) ?></span>
                            <span class="speaker-card__org"><?= htmlspecialchars($sp['organisation']) ?></span>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        </div>

    </section>

"""

# ── FINAL CTA with video bg ───────────────────────────────────────────────────
final_cta = """\
    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="final-cta section final-cta--video">

        <video autoplay muted loop playsinline class="final-cta__video">
            <source src="assets/videos/hero2.mp4" type="video/mp4">
        </video>

        <div class="container">

            <div class="final-cta__content">

                <span class="section-label">
                    SUSTAIN 2026
                </span>

                <h2>
                    Be part of
                    <br>
                    <span>the transition.</span>
                </h2>

                <div class="final-cta__details">
                    <div>
                        <span>DATE</span>
                        <strong>10 NOVEMBER 2026</strong>
                    </div>
                    <div>
                        <span>VENUE</span>
                        <strong>BACC &middot; MALAYSIA</strong>
                    </div>
                </div>

                <a href="pages/register.php" class="btn btn--primary btn--large">
                    Register for SUSTAIN 2026
                    <span>&#8599;</span>
                </a>

            </div>

        </div>

    </section>"""

# ── hardcode the PHP top boilerplate ─────────────────────────────────────────
top = """\
<?php
/**
 * SUSTAIN 2026
 * Malaysia Sustainability & ESG Conference
 * Homepage
 */

$pageTitle = 'SUSTAIN 2026 \xe2\x80\x94 Malaysia Sustainability & ESG Conference';

require_once 'includes/header.php';
?>

<main class="site-main">

"""

bottom = """\

</main>

<?php
require_once 'includes/footer.php';
?>
"""

new_index = (
    top
    + hero
    + data_table
    + journey
    + experience
    + speakers
    + impact
    + gsed
    + final_cta
    + bottom
)

with open('index.php', 'w') as f:
    f.write(new_index)

print("Written. Checking for duplicates...")
import re
sections = re.findall(r'<!-- ====', new_index)
print(f"Number of section comment blocks: {len(sections)}")
