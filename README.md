
# Three Cards Theme

## Task Description
This project implements a 3-card grid layout in WordPress using the provided Figma design. 
It includes SCSS partials for modular styling and compiles into `style.css`.

### Requirements Implemented
- Custom WP template for 3-card layout (`template-3-cards.php`)
- Each card includes: image, title, description, and button
- SCSS partials: `_variables.scss`, `_mixins.scss`, `_cards.scss`
- SCSS features:
  - Variables (colors, fonts, spacing)
  - Nesting for card elements
  - Mixins for responsive breakpoints
  - Placeholders for reusable styles
- Responsive layout: grid on desktop, stacked on mobile

### Styling Rules
- Colors: `#142837` (dark), `#00CDE6` (accent), `#FFFFFF`, `#FF4B5A`
- Card and button border radius: bottom-right `12px`
- Images: 16:9 ratio, top-aligned, hover zoom only on image
- Gradient overlay: minimal, bottom 60% of image, fade upward
- Cards have tighter spacing, no top/bottom gaps

### Deliverables
- WordPress template: `template-3-cards.php`
- SCSS folder with partials + `main.scss`
- Compiled `css/main.css`
- This README file

### Git Usage
Push this project to GitHub/GitLab/Bitbucket with proper commits. 
