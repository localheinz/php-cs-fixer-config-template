<?php

declare(strict_types=1);

/**
 * Copyright (c) 2019-2024 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/php-cs-fixer-config-template
 */

namespace Ergebnis\PhpCsFixer\Config\Test\Unit\RuleSet;

use Ergebnis\PhpCsFixer\Config\Factory;
use Ergebnis\PhpCsFixer\Config\Fixers;
use Ergebnis\PhpCsFixer\Config\Name;
use Ergebnis\PhpCsFixer\Config\PhpVersion;
use Ergebnis\PhpCsFixer\Config\Rules;
use Ergebnis\PhpCsFixer\Config\RuleSet;
use PHPUnit\Framework;

#[Framework\Attributes\CoversClass(RuleSet\Custom::class)]
#[Framework\Attributes\UsesClass(Factory::class)]
#[Framework\Attributes\UsesClass(Fixers::class)]
#[Framework\Attributes\UsesClass(Name::class)]
#[Framework\Attributes\UsesClass(PhpVersion::class)]
#[Framework\Attributes\UsesClass(PhpVersion\Major::class)]
#[Framework\Attributes\UsesClass(PhpVersion\Minor::class)]
#[Framework\Attributes\UsesClass(PhpVersion\Patch::class)]
#[Framework\Attributes\UsesClass(Rules::class)]
#[Framework\Attributes\UsesClass(RuleSet::class)]
final class CustomTest extends ExplicitRuleSetTestCase
{
    protected static function createRuleSet(): RuleSet
    {
        return RuleSet\Custom::create();
    }

    protected function expectedCustomFixers(): Fixers
    {
        return Fixers::empty();
    }

    protected function expectedName(): Name
    {
        return Name::fromString('custom (PHP 8.1)');
    }

    protected function expectedRules(): Rules
    {
        return Rules::fromArray([
            'align_multiline_comment' => false,
            'array_indentation' => false,
            'array_push' => false,
            'array_syntax' => false,
            'assign_null_coalescing_to_coalesce_equal' => false,
            'attribute_empty_parentheses' => false,
            'backtick_to_shell_exec' => false,
            'binary_operator_spaces' => false,
            'blank_line_after_namespace' => false,
            'blank_line_after_opening_tag' => false,
            'blank_line_before_statement' => false,
            'blank_line_between_import_groups' => false,
            'blank_lines_before_namespace' => false,
            'braces_position' => false,
            'cast_spaces' => false,
            'class_attributes_separation' => false,
            'class_definition' => false,
            'class_keyword' => false,
            'class_reference_name_casing' => false,
            'clean_namespace' => false,
            'combine_consecutive_issets' => false,
            'combine_consecutive_unsets' => false,
            'combine_nested_dirname' => false,
            'comment_to_phpdoc' => false,
            'compact_nullable_type_declaration' => false,
            'concat_space' => false,
            'constant_case' => false,
            'control_structure_braces' => false,
            'control_structure_continuation_position' => false,
            'date_time_create_from_format_call' => false,
            'date_time_immutable' => false,
            'declare_equal_normalize' => false,
            'declare_parentheses' => false,
            'declare_strict_types' => false,
            'dir_constant' => false,
            'doctrine_annotation_array_assignment' => false,
            'doctrine_annotation_braces' => false,
            'doctrine_annotation_indentation' => false,
            'doctrine_annotation_spaces' => false,
            'echo_tag_syntax' => false,
            'elseif' => false,
            'empty_loop_body' => false,
            'empty_loop_condition' => false,
            'encoding' => false,
            'ereg_to_preg' => false,
            'error_suppression' => false,
            'explicit_indirect_variable' => false,
            'explicit_string_variable' => false,
            'final_class' => false,
            'final_internal_class' => false,
            'final_public_method_for_abstract_class' => false,
            'fopen_flag_order' => false,
            'fopen_flags' => false,
            'full_opening_tag' => false,
            'fully_qualified_strict_types' => false,
            'function_declaration' => false,
            'function_to_constant' => false,
            'general_phpdoc_annotation_remove' => false,
            'general_phpdoc_tag_rename' => false,
            'get_class_to_class_keyword' => false,
            'global_namespace_import' => false,
            'group_import' => false,
            'header_comment' => false,
            'heredoc_closing_marker' => false,
            'heredoc_indentation' => false,
            'heredoc_to_nowdoc' => false,
            'implode_call' => false,
            'include' => false,
            'increment_style' => false,
            'indentation_type' => false,
            'integer_literal_case' => false,
            'is_null' => false,
            'lambda_not_used_import' => false,
            'line_ending' => false,
            'linebreak_after_opening_tag' => false,
            'list_syntax' => false,
            'logical_operators' => false,
            'long_to_shorthand_operator' => false,
            'lowercase_cast' => false,
            'lowercase_keywords' => false,
            'lowercase_static_reference' => false,
            'magic_constant_casing' => false,
            'magic_method_casing' => false,
            'mb_str_functions' => false,
            'method_argument_space' => false,
            'method_chaining_indentation' => false,
            'modernize_strpos' => false,
            'modernize_types_casting' => false,
            'multiline_comment_opening_closing' => false,
            'multiline_string_to_heredoc' => false,
            'multiline_whitespace_before_semicolons' => false,
            'native_constant_invocation' => false,
            'native_function_casing' => false,
            'native_function_invocation' => false,
            'native_type_declaration_casing' => false,
            'new_with_parentheses' => false,
            'no_alias_functions' => false,
            'no_alias_language_construct_call' => false,
            'no_alternative_syntax' => false,
            'no_binary_string' => false,
            'no_blank_lines_after_class_opening' => false,
            'no_blank_lines_after_phpdoc' => false,
            'no_break_comment' => false,
            'no_closing_tag' => false,
            'no_empty_comment' => false,
            'no_empty_phpdoc' => false,
            'no_empty_statement' => false,
            'no_extra_blank_lines' => false,
            'no_homoglyph_names' => false,
            'no_leading_import_slash' => false,
            'no_leading_namespace_whitespace' => false,
            'no_mixed_echo_print' => false,
            'no_multiline_whitespace_around_double_arrow' => false,
            'no_multiple_statements_per_line' => false,
            'no_null_property_initialization' => false,
            'no_php4_constructor' => false,
            'no_short_bool_cast' => false,
            'no_singleline_whitespace_before_semicolons' => false,
            'no_space_around_double_colon' => false,
            'no_spaces_after_function_name' => false,
            'no_spaces_around_offset' => false,
            'no_superfluous_elseif' => false,
            'no_superfluous_phpdoc_tags' => false,
            'no_trailing_comma_in_singleline' => false,
            'no_trailing_whitespace' => false,
            'no_trailing_whitespace_in_comment' => false,
            'no_trailing_whitespace_in_string' => false,
            'no_unneeded_braces' => false,
            'no_unneeded_control_parentheses' => false,
            'no_unneeded_final_method' => false,
            'no_unneeded_import_alias' => false,
            'no_unreachable_default_argument_value' => false,
            'no_unset_cast' => false,
            'no_unset_on_property' => false,
            'no_unused_imports' => false,
            'no_useless_concat_operator' => false,
            'no_useless_else' => false,
            'no_useless_nullsafe_operator' => false,
            'no_useless_return' => false,
            'no_useless_sprintf' => false,
            'no_whitespace_before_comma_in_array' => false,
            'no_whitespace_in_blank_line' => false,
            'non_printable_character' => false,
            'normalize_index_brace' => false,
            'not_operator_with_space' => false,
            'not_operator_with_successor_space' => false,
            'nullable_type_declaration' => false,
            'nullable_type_declaration_for_default_null_value' => false,
            'numeric_literal_separator' => false,
            'object_operator_without_whitespace' => false,
            'octal_notation' => false,
            'operator_linebreak' => false,
            'ordered_class_elements' => false,
            'ordered_imports' => false,
            'ordered_interfaces' => false,
            'ordered_traits' => false,
            'ordered_types' => false,
            'php_unit_attributes' => false,
            'php_unit_construct' => false,
            'php_unit_data_provider_name' => false,
            'php_unit_data_provider_return_type' => false,
            'php_unit_data_provider_static' => false,
            'php_unit_dedicate_assert' => false,
            'php_unit_dedicate_assert_internal_type' => false,
            'php_unit_expectation' => false,
            'php_unit_fqcn_annotation' => false,
            'php_unit_internal_class' => false,
            'php_unit_method_casing' => false,
            'php_unit_mock' => false,
            'php_unit_mock_short_will_return' => false,
            'php_unit_namespaced' => false,
            'php_unit_no_expectation_annotation' => false,
            'php_unit_set_up_tear_down_visibility' => false,
            'php_unit_size_class' => false,
            'php_unit_strict' => false,
            'php_unit_test_annotation' => false,
            'php_unit_test_case_static_method_calls' => false,
            'php_unit_test_class_requires_covers' => false,
            'phpdoc_add_missing_param_annotation' => false,
            'phpdoc_align' => false,
            'phpdoc_annotation_without_dot' => false,
            'phpdoc_array_type' => false,
            'phpdoc_indent' => false,
            'phpdoc_inline_tag_normalizer' => false,
            'phpdoc_line_span' => false,
            'phpdoc_list_type' => false,
            'phpdoc_no_access' => false,
            'phpdoc_no_alias_tag' => false,
            'phpdoc_no_empty_return' => false,
            'phpdoc_no_package' => false,
            'phpdoc_no_useless_inheritdoc' => false,
            'phpdoc_order' => false,
            'phpdoc_order_by_value' => false,
            'phpdoc_param_order' => false,
            'phpdoc_readonly_class_comment_to_keyword' => false,
            'phpdoc_return_self_reference' => false,
            'phpdoc_scalar' => false,
            'phpdoc_separation' => false,
            'phpdoc_single_line_var_spacing' => false,
            'phpdoc_summary' => false,
            'phpdoc_tag_casing' => false,
            'phpdoc_tag_type' => false,
            'phpdoc_to_comment' => false,
            'phpdoc_to_param_type' => false,
            'phpdoc_to_property_type' => false,
            'phpdoc_to_return_type' => false,
            'phpdoc_trim' => false,
            'phpdoc_trim_consecutive_blank_line_separation' => false,
            'phpdoc_types' => false,
            'phpdoc_types_order' => false,
            'phpdoc_var_annotation_correct_order' => false,
            'phpdoc_var_without_name' => false,
            'pow_to_exponentiation' => false,
            'protected_to_private' => false,
            'psr_autoloading' => false,
            'random_api_migration' => false,
            'regular_callable_call' => false,
            'return_assignment' => false,
            'return_to_yield_from' => false,
            'return_type_declaration' => false,
            'self_accessor' => false,
            'self_static_accessor' => false,
            'semicolon_after_instruction' => false,
            'set_type_to_cast' => false,
            'short_scalar_cast' => false,
            'simple_to_complex_string_variable' => false,
            'simplified_if_return' => false,
            'simplified_null_return' => false,
            'single_blank_line_at_eof' => false,
            'single_class_element_per_statement' => false,
            'single_import_per_statement' => false,
            'single_line_after_imports' => false,
            'single_line_comment_spacing' => false,
            'single_line_comment_style' => false,
            'single_line_empty_body' => false,
            'single_line_throw' => false,
            'single_quote' => false,
            'single_space_around_construct' => false,
            'single_trait_insert_per_statement' => false,
            'space_after_semicolon' => false,
            'spaces_inside_parentheses' => false,
            'standardize_increment' => false,
            'standardize_not_equals' => false,
            'statement_indentation' => false,
            'static_lambda' => false,
            'strict_comparison' => false,
            'strict_param' => false,
            'string_implicit_backslashes' => false,
            'string_length_to_empty' => false,
            'string_line_ending' => false,
            'switch_case_semicolon_to_colon' => false,
            'switch_case_space' => false,
            'switch_continue_to_break' => false,
            'ternary_operator_spaces' => false,
            'ternary_to_elvis_operator' => false,
            'ternary_to_null_coalescing' => false,
            'trailing_comma_in_multiline' => false,
            'trim_array_spaces' => false,
            'type_declaration_spaces' => false,
            'types_spaces' => false,
            'unary_operator_spaces' => false,
            'use_arrow_functions' => false,
            'visibility_required' => false,
            'void_return' => false,
            'whitespace_after_comma_in_array' => false,
            'yield_from_array_to_yields' => false,
            'yoda_style' => false,
        ]);
    }

    protected function expectedPhpVersion(): PhpVersion
    {
        return PhpVersion::create(
            PhpVersion\Major::fromInt(8),
            PhpVersion\Minor::fromInt(1),
            PhpVersion\Patch::fromInt(0),
        );
    }
}
