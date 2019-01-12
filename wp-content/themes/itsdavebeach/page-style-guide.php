<?php
/**
 * The template for displaying the Style Guide
 *
 * @package It's_Dave_Beach
 */

get_header();
?>

<div class="title-block stage">

<?php
    set_query_var( 'title-block__slug', 'style-guide' );
    set_query_var( 'title-block__text', 'Style Guide' );
    get_template_part( 'template-parts/title-block' );
?>

</div>

<div class="content-block stage">
    <div class="section__container">
        
        <h1 class="heading-1">Style Guide</h1>

        <h2 class="heading-2">Headings</h2>
        <div class="heading-1">Heading level 1</div>
        <div class="heading-2">Heading level 2</div>
        <div class="heading-3">Heading Level 3</div>
        <div class="heading-4">Heading Level 4</div>
        <div class="heading-5">Heading Level 5</div>
        <div class="heading-6">Heading Level 6</div>

        <h2 class="heading-2">Colours</h2>
        <ul class="style-guide__colours">

        </ul>
        
        <h2 class="heading-2">Paragraph</h2>
A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.

A paragraph (from the Greek paragraphos, "to write beside" or "written beside") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.

        <h2 class="heading-2">Fonts</h2>

Primary Font: "Proxima Nova", sans-serif;

Primary Font italic: "Proxima Nova", sans-serif;

Primary Font bold: "Proxima Nova", sans-serif;

Secondary Font: Georgia, serif;

Secondary Font italic: Georgia, sans-serif;

Monospace Font: "Menlo for Powerline", "Menlo", Consolas, Courier, monospace;

        <h2 class="heading-2">Inline Elements</h2>

This is a text link

Strong is used to indicate strong importance

This text has added emphasis

The b element is stylistically different text from normal text, without any special importance

The i element is text that is set off from the normal text

The u element is text with an unarticulated, though explicitly rendered, non-textual annotation

This text is deleted and This text is inserted

This text has a strikethrough

Superscript for things like: 8th of August a2 + b2 = c2 E = mc2

Subscript for things like: H2O H2SO4 C24H26O7

This small text for fine print, etc.

Abbreviation: HTML

Keyboard input: TAB

This text is a short inline quotation

This text is a short inline quotation with another short inline quotation inside

This is a citation

The dfn element indicates a definition

The mark element indicates a highlight

This is what inline code looks like

This is sample output from a computer program

The variable element, such as x = y

        <h2 class="heading-2">Blockquote</h2>

A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text, and typically distinguished visually using indentation and a different typeface or smaller size quotation.

Quote Source

        <h2 class="heading-2">Unordered List</h2>

This is a list item in an unordered list
An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line.
Lists can be nested inside of each other
This is a nested list item
This is another nested list item in an unordered list
This is the last list item

        <h2 class="heading-2">Ordered List</h2>

This is a list item in an ordered list
An ordered list is a list in which the sequence of items is important. An ordered list does not necessarily contain sequence characters.
Lists can be nested inside of each other
This is a nested list item
This is another nested list item in an ordered list
This is the last list item

        <h2 class="heading-2">Definition List</h2>

Definition List
A number of connected items or names written or printed consecutively, typically one below the other.
This is a term.
This is the definition of that term, which both live in a dl.
And another term.
And it gets a definition too, which is this line.

        <h2 class="heading-2">Table</h2>

Heading A	Heading B	Heading C
Cell A-1	Cell B-1	Cell C-1
Cell A-2	Cell B-2	Cell C-2
Cell A-3	Cell B-3	Cell C-3
Cell A-4	Cell B-4	Cell C-4
Cell A-5	Cell B-5	Cell C-5
Foot A	Foot B	Foot C

        <h2 class="heading-2">Code Block</h2>
CODE BLOCK
@function strip-unit($number) {
    @if not $number {
        @warn "strip-unit() expects at least one parameter.";
        @return false;
    }
    @return $number / ($number * 0 + 1);
}
CODE BLOCK WITH LANGUAGE
@function strip-unit($number) {
    @if not $number {
        @warn "strip-unit() expects at least one parameter.";
        @return false;
    }
    @return $number / ($number * 0 + 1);
}
EXTENDED CODE BLOCK WITH LANGUAGE

formatDate: function(date) {
    const months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];
    let day = date.getDate();
    if (day < 10) {
        day = `0${day}`;
    }
    let monthIndex = date.getMonth();
    let year = date.getFullYear();
    return `${day} ${months[monthIndex]} ${year}`;
}

        <h2 class="heading-2">Image</h2>
FIGURE
 FIGURE WITH CAPTION
 
Sintra, Portugal skyline by  me
VIDEO

        <h2 class="heading-2">Buttons</h2>
BUTTONS
BUTTONS LIST

        <h2 class="heading-2">Form Elements</h2>
TEXT INPUT

HORIZONTAL RULE

        <h2 class="heading-2">Icons</h2>
ICONS

    </div>
</div>

<?php
get_footer();
