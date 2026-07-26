import os

files = {
  'public/assets/scss/1-abstracts/_variables.scss': '''$dark-savoy   : #392C1E !default;
$gold-accent  : #906427 !default;
$gold-hover   : #734E1D !default;
$beige-light  : #F8F6F0 !default;
$beige-border : #B6AC97 !default;
$white        : #FFFFFF !default;

$font-headings : 'Outfit', sans-serif !default;
$font-body     : 'Roboto', sans-serif !default;

$primary       : $gold-accent !default;
$dark          : $dark-savoy !default;
$body-bg       : $beige-light !default;
$body-color    : $dark-savoy !default;
$border-color  : $beige-border !default;

$border-radius-sm   : 6px !default;
$border-radius      : 12px !default;
$border-radius-lg   : 20px !default;
$border-radius-pill : 50rem !default;
''',

  'public/assets/scss/1-abstracts/_functions.scss': '''@function rem($pixels, $context: 16px) {
    @if (unitless($pixels)) { $pixels: $pixels * 1px; }
    @return ($pixels / $context) * 1rem;
}
@function text-contrast($bg-color) {
    @if (lightness($bg-color) > 60%) { @return #392C1E; }
    @else { @return #ffffff; }
}
''',

  'public/assets/scss/2-base/_typography.scss': '''h1, h2, h3, h4, h5, h6 { font-family: $font-headings; font-weight: 700; color: $dark-savoy; margin-bottom: 1rem; }
.text-gold { color: $gold-accent; }
.font-heading { font-family: $font-headings; }
''',

  'public/assets/scss/vendors/_bootstrap.scss': '''.navbar-toggler {
    &:focus { box-shadow: none; outline: none; }
    .navbar-toggler-icon { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }
}

.dropdown-menu {
    border-radius: 6px; border: 1px solid $beige-border; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); background-color: #ffffff;
    .dropdown-item { color: $dark-savoy; font-weight: 500; padding: 0.5rem 1.25rem; transition: all 0.3s ease; &:hover, &:focus, &.active { background-color: $gold-accent; color: #ffffff; } }
}

.modal-content { border-radius: 20px; border: none; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2); }
.modal-header { background-color: $dark-savoy; color: #ffffff; border-bottom: 2px solid $gold-accent; border-top-left-radius: 20px; border-top-right-radius: 20px; .btn-close { filter: invert(1) grayscale(100%) brightness(200%); } }

.pagination { .page-item { .page-link { color: $dark-savoy; border-color: $beige-border; font-weight: 600; transition: all 0.3s ease; &:hover { background-color: rgba($beige-border, 0.3); color: $gold-accent; } } &.active .page-link { background-color: $gold-accent; border-color: $gold-accent; color: #ffffff; } &.disabled .page-link { color: #6c757d; background-color: #f8f9fa; } } }

.accordion-item { border: 1px solid $beige-border; border-radius: 6px; margin-bottom: 0.5rem; overflow: hidden; .accordion-button { font-family: $font-headings; font-weight: 600; color: $dark-savoy; background-color: #ffffff; &:not(.collapsed) { color: $gold-accent; background-color: rgba($beige-border, 0.2); box-shadow: none; } &:focus { box-shadow: none; border-color: $gold-accent; } } }
'''
}

for path, content in files.items():
    os.makedirs(os.path.dirname(path), exist_ok=True)
    with open(path, 'w', encoding='utf-8') as f:
        f.write(content)

print("✨ Tous les fichiers SCSS ont été réparés !")