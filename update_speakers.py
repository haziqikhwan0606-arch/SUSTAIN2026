import re

with open('index.php', 'r') as f:
    content = f.read()

# Replace speaker placeholder with actual PHP loop

speaker_replacement = """
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
                    Meet the speakers
                    <span>↗</span>
                </a>

            </div>

            <?php
            require_once 'includes/speakers_data.php';
            if (!empty($speakers)): 
            ?>

                <div class="speaker-grid">

                    <?php foreach (array_slice($speakers, 0, 4) as $index => $speaker): ?>

                        <article class="speaker-card">

                            <div class="speaker-card__image">
                                <?php if (!empty($speaker['image'])): ?>
                                    <img
                                        src="<?= htmlspecialchars($speaker['image']) ?>"
                                        alt="<?= htmlspecialchars($speaker['name']) ?>"
                                        loading="lazy"
                                    >
                                <?php else: ?>
                                    <div class="speaker-card__placeholder">
                                        <span>+</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="speaker-card__content">
                                <div class="speaker-card__meta">
                                    <span class="speaker-card__number">
                                        <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                                    </span>
                                    <?php if (!empty($speaker['category'])): ?>
                                        <span class="speaker-card__category">
                                            <?= htmlspecialchars($speaker['category']) ?>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <h3>
                                    <?php if (!empty($speaker['title'])): ?>
                                        <?= htmlspecialchars($speaker['title']) ?>
                                    <?php endif; ?>
                                    <?= htmlspecialchars($speaker['name']) ?>
                                </h3>

                                <div class="speaker-card__details">
                                    <span class="speaker-card__position">
                                        <?= htmlspecialchars($speaker['position']) ?>
                                    </span>
                                    <span class="speaker-card__org">
                                        <?= htmlspecialchars($speaker['organisation']) ?>
                                    </span>
                                </div>
                            </div>
                        </article>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>

    </section>
"""

# Find the start of speakers section
start_idx = content.find('<!-- =====================================================\n         SPEAKERS')
next_idx = content.find('<!-- =====================================================\n         IMPACT / SDGs', start_idx)

if start_idx != -1 and next_idx != -1:
    new_content = content[:start_idx] + speaker_replacement + content[next_idx:]
    with open('index.php', 'w') as f:
        f.write(new_content)
    print("Speakers updated.")
else:
    print("Could not find boundaries.")
