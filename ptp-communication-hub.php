<?php
/**
 * Plugin Name: PTP Communication Hub - Enterprise Edition
 * Plugin URI: https://ptpsoccercamps.com
 * Description: Enterprise-grade unified communication platform with SMS, voice, email, branded UI, campaign builder, analytics, and complete CRM integration
 * Version: 5.0.0
 * Author: PTP Soccer Camps
 * Author URI: https://ptpsoccercamps.com
 * License: GPL v2 or later
 * Text Domain: ptp-communication-hub
 * Requires at least: 5.0
 * Requires PHP: 7.4
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('PTP_COMM_VERSION', '5.0.0');
define('PTP_COMM_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('PTP_COMM_PLUGIN_URL', plugin_dir_url(__FILE__));
define('PTP_COMM_PLUGIN_FILE', __FILE__);

// Inline assets for single-file distribution
if (!defined('PTP_COMM_INLINE_CSS')) {
    define('PTP_COMM_INLINE_CSS', '/**
 * PTP Communication Hub v5.0 - Enterprise Admin CSS
 * Complete PTP branding with design tokens
 */

:root {
  --ptp-yellow: #FCB900;
  --ptp-yellow-hover: #e5a700;
  --ptp-yellow-light: rgba(252, 185, 0, 0.12);
  --ptp-ink: #0e0f11;
  --ptp-bg: #f5f5f7;
  --ptp-card: #ffffff;
  --ptp-muted: #6b7280;
  --ptp-border: #e5e7eb;
  --ptp-radius: 14px;
  --ptp-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);
  --ptp-transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

/* ============================================================================
   ENTERPRISE LAYOUT
   ============================================================================ */

.ptp-commhub-wrap {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Inter", "Segoe UI", sans-serif;
  background: var(--ptp-bg);
  min-height: 100vh;
  margin: 0 -20px;
  padding: 24px 32px 40px;
}

.ptp-commhub-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 24px;
}

.ptp-commhub-title {
  font-size: 24px;
  font-weight: 700;
  color: var(--ptp-ink);
  display: flex;
  align-items: center;
}

.ptp-commhub-header .description {
  margin: 4px 0 0 0;
  color: var(--ptp-muted);
  font-size: 14px;
}

.ptp-commhub-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 12px;
  border-radius: 999px;
  background: var(--ptp-yellow-light);
  color: var(--ptp-yellow);
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

.ptp-commhub-badge .dashicons {
  font-size: 14px;
  width: 14px;
  height: 14px;
}

/* ============================================================================
   GRID LAYOUT
   ============================================================================ */

.ptp-commhub-grid {
  display: grid;
  grid-template-columns: 280px minmax(0, 1fr);
  gap: 20px;
}

@media (max-width: 1200px) {
  .ptp-commhub-grid {
    grid-template-columns: 1fr;
  }
}

/* ============================================================================
   CARDS
   ============================================================================ */

.ptp-commhub-card {
  background: var(--ptp-card);
  border-radius: var(--ptp-radius);
  border: 1px solid var(--ptp-border);
  box-shadow: var(--ptp-shadow);
  padding: 18px 20px;
}

/* Universal admin scaffolding to keep every page aligned */
.ptp-commhub-card h2,
.ptp-commhub-card h3,
.ptp-commhub-card h4 {
  margin-top: 0;
  color: var(--ptp-ink);
}

.ptp-commhub-card .ptp-card-meta {
  display: flex;
  gap: 12px;
  align-items: center;
  flex-wrap: wrap;
  color: var(--ptp-muted);
  font-size: 13px;
}

.ptp-commhub-card .wp-list-table th,
.ptp-commhub-card .wp-list-table td {
  font-size: 13px;
  vertical-align: middle;
}

.ptp-commhub-card .wp-list-table thead th {
  background: #f8fafc;
}

.ptp-commhub-card-title {
  font-size: 14px;
  font-weight: 600;
  color: var(--ptp-ink);
  margin-bottom: 12px;
}

/* ============================================================================
   FILTERS & SIDEBAR
   ============================================================================ */

.ptp-filter-section {
  margin-bottom: 16px;
}

.ptp-filter-label {
  display: block;
  font-size: 12px;
  font-weight: 500;
  color: var(--ptp-ink);
  margin-bottom: 6px;
}

.ptp-filter-select {
  width: 100%;
  padding: 8px 12px;
  border: 1px solid var(--ptp-border);
  border-radius: 8px;
  font-size: 13px;
  color: var(--ptp-ink);
  background: white;
  transition: var(--ptp-transition);
}

.ptp-filter-select:focus {
  outline: none;
  border-color: var(--ptp-yellow);
  box-shadow: 0 0 0 3px var(--ptp-yellow-light);
}

/* ============================================================================
   CHIPS & BADGES
   ============================================================================ */

.ptp-commhub-chip {
  display: inline-flex;
  align-items: center;
  padding: 4px 10px;
  border-radius: 999px;
  border: 1px solid var(--ptp-border);
  font-size: 11px;
  color: var(--ptp-muted);
  background: white;
  margin: 4px 4px 4px 0;
}

.ptp-commhub-chip .dashicons {
  font-size: 14px;
  width: 14px;
  height: 14px;
  margin-right: 4px;
}

.ptp-commhub-chip--active {
  border-color: rgba(16, 185, 129, 0.5);
  background: rgba(16, 185, 129, 0.1);
  color: #059669;
}

.ptp-commhub-chip--quiet {
  border-color: rgba(245, 158, 11, 0.5);
  background: rgba(245, 158, 11, 0.1);
  color: #d97706;
}

.ptp-commhub-chip-dot {
  width: 8px;
  height: 8px;
  border-radius: 999px;
  margin-right: 6px;
}

/* ============================================================================
   HEALTH INDICATORS
   ============================================================================ */

.ptp-health-chip {
  display: flex;
  align-items: center;
  padding: 8px 12px;
  border-radius: 8px;
  border: 1px solid var(--ptp-border);
  background: white;
  font-size: 12px;
  color: var(--ptp-ink);
  margin-bottom: 8px;
}

.ptp-health-dot {
  width: 8px;
  height: 8px;
  border-radius: 999px;
  margin-right: 8px;
}

.ptp-health-dot--online {
  background: #10b981;
  box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
}

.ptp-health-dot--offline {
  background: #9ca3af;
}

/* ============================================================================
   BUTTONS
   ============================================================================ */

.ptp-pill-button {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  border-radius: 999px;
  padding: 8px 16px;
  border: 1px solid var(--ptp-border);
  background: white;
  cursor: pointer;
  font-size: 13px;
  font-weight: 500;
  color: var(--ptp-ink);
  transition: var(--ptp-transition);
}

.ptp-pill-button:hover {
  background: var(--ptp-bg);
  border-color: var(--ptp-muted);
}

.ptp-pill-button:focus {
  outline: 2px solid var(--ptp-yellow-light);
  outline-offset: 2px;
}

.ptp-pill-button--primary {
  background: var(--ptp-yellow);
  border-color: var(--ptp-yellow);
  color: var(--ptp-ink);
  font-weight: 600;
}

.ptp-pill-button--primary:hover {
  background: var(--ptp-yellow-hover);
  border-color: var(--ptp-yellow-hover);
}

.ptp-pill-button .dashicons {
  font-size: 16px;
  width: 16px;
  height: 16px;
}

.ptp-back-button {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  color: var(--ptp-muted);
  text-decoration: none;
  font-size: 13px;
  padding: 6px 12px;
  border-radius: 8px;
  transition: var(--ptp-transition);
  margin-bottom: 12px;
}

.ptp-back-button:hover {
  background: var(--ptp-bg);
  color: var(--ptp-ink);
}

/* ============================================================================
   CONVERSATION LIST
   ============================================================================ */

.ptp-inbox-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}

.ptp-inbox-header h2 {
  margin: 0;
  font-size: 18px;
  font-weight: 600;
  color: var(--ptp-ink);
}

.ptp-inbox-search {
  position: relative;
}

.ptp-search-input {
  padding: 8px 36px 8px 12px;
  border: 1px solid var(--ptp-border);
  border-radius: 999px;
  font-size: 13px;
  width: 280px;
  transition: var(--ptp-transition);
}

.ptp-search-input:focus {
  outline: none;
  border-color: var(--ptp-yellow);
  box-shadow: 0 0 0 3px var(--ptp-yellow-light);
}

.ptp-inbox-search .dashicons {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--ptp-muted);
}

.ptp-conversation-list {
  display: flex;
  flex-direction: column;
  gap: 1px;
}

.ptp-conversation-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  padding: 16px;
  border-bottom: 1px solid var(--ptp-border);
  text-decoration: none;
  color: var(--ptp-ink);
  transition: var(--ptp-transition);
  cursor: pointer;
}

.ptp-conversation-item:hover {
  background: var(--ptp-bg);
}

.ptp-conversation-item:last-child {
  border-bottom: none;
}

.ptp-conversation-unread {
  background: rgba(252, 185, 0, 0.03);
}

.ptp-conversation-unread .ptp-conversation-name {
  font-weight: 600;
}

.ptp-conversation-avatar {
  position: relative;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: var(--ptp-bg);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.ptp-conversation-avatar .dashicons {
  font-size: 24px;
  width: 24px;
  height: 24px;
  color: var(--ptp-muted);
}

.ptp-unread-badge {
  position: absolute;
  top: -4px;
  right: -4px;
  background: var(--ptp-yellow);
  color: var(--ptp-ink);
  font-size: 10px;
  font-weight: 700;
  min-width: 18px;
  height: 18px;
  border-radius: 999px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 4px;
}

.ptp-conversation-details {
  flex: 1;
  min-width: 0;
}

.ptp-conversation-name {
  font-size: 14px;
  color: var(--ptp-ink);
  margin-bottom: 4px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.ptp-channel-icon {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.ptp-channel-icon .dashicons {
  font-size: 12px;
  width: 12px;
  height: 12px;
}

.ptp-channel-sms {
  background: rgba(59, 130, 246, 0.1);
  color: #3b82f6;
}

.ptp-channel-voice {
  background: rgba(16, 185, 129, 0.1);
  color: #10b981;
}

.ptp-channel-chat {
  background: rgba(168, 85, 247, 0.1);
  color: #a855f7;
}

.ptp-conversation-preview {
  font-size: 13px;
  color: var(--ptp-muted);
  margin-bottom: 6px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.ptp-conversation-meta-row {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
}

.ptp-meta-tag {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  padding: 2px 8px;
  border-radius: 4px;
  background: var(--ptp-bg);
  font-size: 11px;
  color: var(--ptp-muted);
}

.ptp-meta-tag .dashicons {
  font-size: 12px;
  width: 12px;
  height: 12px;
}

.ptp-conversation-right {
  text-align: right;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 6px;
}

.ptp-conversation-time {
  font-size: 11px;
  color: var(--ptp-muted);
  white-space: nowrap;
}

/* ============================================================================
   STATUS & CONSENT BADGES
   ============================================================================ */

.ptp-status-badge {
  display: inline-flex;
  padding: 3px 8px;
  border-radius: 999px;
  font-size: 10px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.ptp-status-new {
  background: rgba(59, 130, 246, 0.1);
  color: #3b82f6;
}

.ptp-status-waiting_parent {
  background: rgba(245, 158, 11, 0.1);
  color: #d97706;
}

.ptp-status-waiting_ptp {
  background: rgba(239, 68, 68, 0.1);
  color: #dc2626;
}

.ptp-status-resolved {
  background: rgba(16, 185, 129, 0.1);
  color: #059669;
}

.ptp-consent-badge {
  display: inline-flex;
  padding: 3px 8px;
  border-radius: 999px;
  font-size: 10px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.ptp-consent-opt_in {
  background: rgba(16, 185, 129, 0.1);
  color: #059669;
}

.ptp-consent-opt_out,
.ptp-consent-unknown {
  background: rgba(156, 163, 175, 0.1);
  color: #6b7280;
}

.ptp-assigned-badge {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  padding: 3px 8px;
  border-radius: 999px;
  background: var(--ptp-bg);
  font-size: 10px;
  color: var(--ptp-muted);
}

.ptp-assigned-badge .dashicons {
  font-size: 12px;
  width: 12px;
  height: 12px;
}

/* ============================================================================
   CONVERSATION DETAIL VIEW
   ============================================================================ */

.ptp-conversation-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding-bottom: 16px;
  border-bottom: 1px solid var(--ptp-border);
  margin-bottom: 20px;
}

.ptp-conversation-header-left {
  flex: 1;
}

.ptp-conversation-title h2 {
  margin: 0 0 8px 0;
  font-size: 20px;
  font-weight: 600;
  color: var(--ptp-ink);
}

.ptp-conversation-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  align-items: center;
}

.ptp-conversation-actions {
  display: flex;
  gap: 10px;
}

.ptp-action-select {
  padding: 8px 12px;
  border: 1px solid var(--ptp-border);
  border-radius: 8px;
  font-size: 13px;
  background: white;
  cursor: pointer;
  transition: var(--ptp-transition);
}

.ptp-action-select:hover {
  border-color: var(--ptp-muted);
}

.ptp-action-select:focus {
  outline: none;
  border-color: var(--ptp-yellow);
  box-shadow: 0 0 0 3px var(--ptp-yellow-light);
}

/* ============================================================================
   MESSAGE THREAD
   ============================================================================ */

.ptp-message-thread {
  max-height: 600px;
  overflow-y: auto;
  padding: 20px 0;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.ptp-message {
  display: flex;
  gap: 12px;
  max-width: 75%;
}

.ptp-message-inbound {
  align-self: flex-start;
}

.ptp-message-outbound {
  align-self: flex-end;
  flex-direction: row-reverse;
}

.ptp-message-avatar {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: var(--ptp-bg);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.ptp-message-avatar .dashicons {
  font-size: 20px;
  width: 20px;
  height: 20px;
  color: var(--ptp-muted);
}

.ptp-message-content {
  flex: 1;
  min-width: 0;
}

.ptp-message-header {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 4px;
  font-size: 12px;
}

.ptp-message-header strong {
  color: var(--ptp-ink);
}

.ptp-message-time {
  color: var(--ptp-muted);
}

.ptp-message-channel-badge {
  padding: 2px 6px;
  border-radius: 4px;
  background: var(--ptp-bg);
  font-size: 9px;
  font-weight: 600;
  color: var(--ptp-muted);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.ptp-message-body {
  background: white;
  border: 1px solid var(--ptp-border);
  border-radius: 12px;
  padding: 12px 14px;
  font-size: 14px;
  line-height: 1.5;
  color: var(--ptp-ink);
}

.ptp-message-outbound .ptp-message-body {
  background: var(--ptp-yellow-light);
  border-color: var(--ptp-yellow);
}

.ptp-message-footer {
  margin-top: 4px;
  font-size: 11px;
}

.ptp-message-status {
  color: var(--ptp-muted);
}

.ptp-message-status-sent {
  color: #3b82f6;
}

.ptp-message-status-delivered {
  color: #10b981;
}

.ptp-message-status-failed {
  color: #ef4444;
}

.ptp-message-empty {
  text-align: center;
  padding: 40px;
  color: var(--ptp-muted);
}

.ptp-message-empty .dashicons {
  font-size: 48px;
  width: 48px;
  height: 48px;
  margin-bottom: 12px;
  color: var(--ptp-border);
}

/* ============================================================================
   MESSAGE COMPOSER
   ============================================================================ */

.ptp-message-composer {
  border-top: 1px solid var(--ptp-border);
  padding-top: 16px;
  margin-top: 20px;
}

.ptp-composer-form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.ptp-composer-toolbar {
  display: flex;
  gap: 10px;
  align-items: center;
}

.ptp-template-select {
  flex: 1;
  padding: 8px 12px;
  border: 1px solid var(--ptp-border);
  border-radius: 8px;
  font-size: 13px;
  background: white;
}

.ptp-composer-textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid var(--ptp-border);
  border-radius: 12px;
  font-size: 14px;
  font-family: inherit;
  resize: vertical;
  transition: var(--ptp-transition);
}

.ptp-composer-textarea:focus {
  outline: none;
  border-color: var(--ptp-yellow);
  box-shadow: 0 0 0 3px var(--ptp-yellow-light);
}

.ptp-composer-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.ptp-char-counter {
  font-size: 12px;
  color: var(--ptp-muted);
}

.ptp-separator {
  margin: 0 6px;
  color: var(--ptp-border);
}

/* ============================================================================
   INFO PANELS
   ============================================================================ */

.ptp-info-row {
  display: flex;
  justify-content: space-between;
  padding: 10px 0;
  border-bottom: 1px solid var(--ptp-border);
  font-size: 13px;
}

.ptp-info-row:last-child {
  border-bottom: none;
}

.ptp-info-row label {
  font-weight: 500;
  color: var(--ptp-muted);
}

.ptp-info-row span {
  color: var(--ptp-ink);
}

.ptp-order-card {
  padding: 12px;
  border: 1px solid var(--ptp-border);
  border-radius: 8px;
  margin-bottom: 8px;
}

.ptp-order-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 6px;
}

.ptp-order-status {
  padding: 2px 8px;
  border-radius: 999px;
  background: var(--ptp-bg);
  font-size: 10px;
  text-transform: uppercase;
  font-weight: 600;
}

.ptp-order-date {
  font-size: 12px;
  color: var(--ptp-muted);
  margin-bottom: 4px;
}

.ptp-order-total {
  font-size: 14px;
  font-weight: 600;
  color: var(--ptp-ink);
}

/* ============================================================================
   EMPTY STATES
   ============================================================================ */

.ptp-inbox-empty {
  text-align: center;
  padding: 60px 20px;
}

.ptp-inbox-empty .dashicons {
  font-size: 64px;
  width: 64px;
  height: 64px;
  color: var(--ptp-border);
  margin-bottom: 16px;
}

.ptp-inbox-empty h3 {
  margin: 0 0 8px 0;
  font-size: 18px;
  font-weight: 600;
  color: var(--ptp-ink);
}

.ptp-inbox-empty p {
  margin: 0;
  color: var(--ptp-muted);
  font-size: 14px;
}

/* ============================================================================
   STATS & ANALYTICS
   ============================================================================ */

.ptp-stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 16px;
  margin-bottom: 24px;
}

.ptp-stat-card {
  background: white;
  border: 1px solid var(--ptp-border);
  border-radius: var(--ptp-radius);
  padding: 20px;
  box-shadow: var(--ptp-shadow);
}

.ptp-stat-label {
  font-size: 12px;
  font-weight: 500;
  color: var(--ptp-muted);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 8px;
}

.ptp-stat-value {
  font-size: 32px;
  font-weight: 700;
  color: var(--ptp-ink);
  line-height: 1;
  margin-bottom: 4px;
}

.ptp-stat-change {
  font-size: 12px;
  font-weight: 500;
}

.ptp-stat-change--positive {
  color: #10b981;
}

.ptp-stat-change--negative {
  color: #ef4444;
}

/* ============================================================================
   ADMIN FOUNDATION & ACCESSIBILITY
   ============================================================================ */

.ptp-commhub-wrap h2,
.ptp-commhub-wrap h3,
.ptp-commhub-wrap h4 {
  display: flex;
  align-items: center;
  gap: 8px;
  margin: 0 0 12px 0;
  color: var(--ptp-ink);
  letter-spacing: -0.01em;
}

.ptp-commhub-wrap a:focus-visible,
.ptp-commhub-wrap button:focus-visible,
.ptp-commhub-wrap input:focus-visible,
.ptp-commhub-wrap select:focus-visible,
.ptp-commhub-wrap textarea:focus-visible {
  outline: 2px solid var(--ptp-yellow);
  outline-offset: 2px;
  box-shadow: 0 0 0 4px var(--ptp-yellow-light);
}

.ptp-commhub-card .form-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
}

.ptp-commhub-card .form-table th {
  width: 220px;
  font-weight: 600;
  color: var(--ptp-muted);
  padding: 12px 16px;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}

.ptp-commhub-card .form-table td {
  padding: 12px 16px;
}

.ptp-commhub-card .form-table input[type="text"],
.ptp-commhub-card .form-table input[type="password"],
.ptp-commhub-card .form-table input[type="tel"],
.ptp-commhub-card .form-table input[type="email"],
.ptp-commhub-card .form-table input[type="number"],
.ptp-commhub-card .form-table select,
.ptp-commhub-card .form-table textarea {
  width: 100%;
  max-width: 520px;
  border: 1px solid var(--ptp-border);
  border-radius: 10px;
  padding: 10px 12px;
  font-size: 14px;
  color: var(--ptp-ink);
  background: white;
  transition: var(--ptp-transition);
}

.ptp-commhub-card .form-table input:focus,
.ptp-commhub-card .form-table select:focus,
.ptp-commhub-card .form-table textarea:focus {
  border-color: var(--ptp-yellow);
  box-shadow: 0 0 0 3px var(--ptp-yellow-light);
  outline: none;
}

.ptp-commhub-card .form-table .description,
.ptp-commhub-card .form-table p.description {
  margin-top: 6px;
  color: var(--ptp-muted);
  font-size: 13px;
}

.ptp-commhub-card .widefat,
.ptp-commhub-card table.wp-list-table {
  border: 1px solid var(--ptp-border);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: var(--ptp-shadow);
}

.ptp-commhub-card .widefat thead th,
.ptp-commhub-card table.wp-list-table thead th {
  background: var(--ptp-bg);
  color: var(--ptp-muted);
  font-size: 12px;
  letter-spacing: 0.03em;
  text-transform: uppercase;
}

.ptp-commhub-card .widefat tbody tr:nth-child(even),
.ptp-commhub-card table.wp-list-table tbody tr:nth-child(even) {
  background: rgba(15, 23, 42, 0.02);
}

.ptp-commhub-card .widefat tbody tr:hover,
.ptp-commhub-card table.wp-list-table tbody tr:hover {
  background: rgba(252, 185, 0, 0.06);
}

.ptp-commhub-card .widefat tbody tr:focus-within,
.ptp-commhub-card table.wp-list-table tbody tr:focus-within {
  outline: 2px solid var(--ptp-yellow);
  outline-offset: -4px;
}

.ptp-commhub-wrap .ptp-section-intro {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 0 0 18px 0;
}

.ptp-commhub-wrap .ptp-section-intro p {
  margin: 4px 0 0 0;
  color: var(--ptp-muted);
}

.ptp-commhub-wrap .ptp-muted-label {
  font-size: 12px;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  color: var(--ptp-muted);
}

.ptp-env-option input:focus-visible + .ptp-env-card {
  border-color: var(--ptp-yellow);
  box-shadow: 0 0 0 3px var(--ptp-yellow-light);
}

.ptp-commhub-card .ptp-pill-button--small {
  padding: 6px 12px;
  font-size: 12px;
}

/* ============================================================================
   RESPONSIVE
   ============================================================================ */

@media (max-width: 782px) {
  .ptp-commhub-wrap {
    padding: 16px;
  }
  
  .ptp-commhub-grid {
    grid-template-columns: 1fr;
  }
  
  .ptp-conversation-item {
    flex-direction: column;
  }
  
  .ptp-message {
    max-width: 100%;
  }
}
');
}

if (!defined('PTP_COMM_INLINE_JS')) {
    define('PTP_COMM_INLINE_JS', '/**
 * PTP Communication Hub Admin JavaScript
 */
(function($) {
    \'use strict\';
    
    $(document).ready(function() {
        
        // Auto-refresh conversation view
        if ($(\'.ptp-conversation\').length) {
            setInterval(function() {
                location.reload();
            }, 30000); // Refresh every 30 seconds
        }
        
        // Mark messages as read when viewing conversation
        $(\'.ptp-conversation\').each(function() {
            var parentId = new URLSearchParams(window.location.search).get(\'parent_id\');
            if (parentId) {
                $.ajax({
                    url: ptpComm.ajaxUrl,
                    type: \'POST\',
                    data: {
                        action: \'ptp_mark_conversation_read\',
                        parent_id: parentId,
                        nonce: ptpComm.nonce
                    }
                });
            }
        });
        
        // Form validation
        $(\'form[name="send_message"]\').on(\'submit\', function(e) {
            var content = $(this).find(\'textarea[name="message_content"]\').val();
            if (content.trim() === \'\') {
                e.preventDefault();
                alert(\'Please enter a message.\');
                return false;
            }
        });
        
        // CSV import validation
        $(\'input[name="csv_file"]\').on(\'change\', function() {
            var fileName = $(this).val();
            if (fileName && !fileName.match(/\\.csv$/i)) {
                alert(\'Please select a valid CSV file.\');
                $(this).val(\'\');
            }
        });
        
        // Confirm campaign send
        $(\'.ptp-send-campaign\').on(\'click\', function(e) {
            var recipientCount = $(this).data(\'recipients\');
            if (!confirm(\'Send campaign to \' + recipientCount + \' recipients?\')) {
                e.preventDefault();
                return false;
            }
        });
        
        // Real-time message counter
        $(\'textarea[name="message_content"]\').on(\'input\', function() {
            var length = $(this).val().length;
            var segments = Math.ceil(length / 160);
            var counter = $(this).siblings(\'.message-counter\');
            
            if (counter.length === 0) {
                counter = $(\'<div class="message-counter"></div>\');
                $(this).after(counter);
            }
            
            counter.text(length + \' characters (\' + segments + \' SMS segment\' + (segments !== 1 ? \'s\' : \'\') + \')\');
        });
        
        // Filter parents by tag
        $(\'#filter-by-tag\').on(\'change\', function() {
            var tag = $(this).val();
            var rows = $(\'.wp-list-table tbody tr\');
            
            if (tag === \'\') {
                rows.show();
            } else {
                rows.each(function() {
                    var tags = $(this).find(\'td:nth-child(4)\').text();
                    if (tags.includes(tag)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
        
        // Click-to-call functionality
        $(\'.ptp-click-to-call\').on(\'click\', function(e) {
            e.preventDefault();
            var phone = $(this).data(\'phone\');
            var parentId = $(this).data(\'parent-id\');
            
            if (confirm(\'Initiate call to \' + phone + \'?\')) {
                $.ajax({
                    url: ptpComm.ajaxUrl,
                    type: \'POST\',
                    data: {
                        action: \'ptp_initiate_call\',
                        parent_id: parentId,
                        phone: phone,
                        nonce: ptpComm.nonce
                    },
                    success: function(response) {
                        if (response.success) {
                            alert(\'Call initiated successfully!\');
                        } else {
                            alert(\'Error initiating call: \' + response.data);
                        }
                    }
                });
            }
        });
        
        // Live search for parents
        $(\'#parent-search\').on(\'keyup\', function() {
            var search = $(this).val().toLowerCase();
            var rows = $(\'.wp-list-table tbody tr\');
            
            rows.each(function() {
                var text = $(this).text().toLowerCase();
                if (text.includes(search)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
        
        // Bulk actions
        $(\'#bulk-action-submit\').on(\'click\', function(e) {
            e.preventDefault();
            var action = $(\'#bulk-action-selector\').val();
            var selected = [];
            
            $(\'input[name="parent[]"]:checked\').each(function() {
                selected.push($(this).val());
            });
            
            if (selected.length === 0) {
                alert(\'Please select at least one parent.\');
                return;
            }
            
            if (!confirm(\'Apply action to \' + selected.length + \' parent(s)?\')) {
                return;
            }
            
            $.ajax({
                url: ptpComm.ajaxUrl,
                type: \'POST\',
                data: {
                    action: \'ptp_bulk_action\',
                    bulk_action: action,
                    parents: selected,
                    nonce: ptpComm.nonce
                },
                success: function(response) {
                    if (response.success) {
                        location.reload();
                    } else {
                        alert(\'Error: \' + response.data);
                    }
                }
            });
        });
        
        // Toggle settings sections
        $(\'.ptp-settings-toggle\').on(\'click\', function() {
            $(this).next(\'.ptp-settings-content\').slideToggle();
            $(this).toggleClass(\'open\');
        });
        
        // Dashboard stats auto-refresh
        if ($(\'.ptp-comm-stats\').length) {
            setInterval(function() {
                $.ajax({
                    url: ptpComm.ajaxUrl,
                    type: \'POST\',
                    data: {
                        action: \'ptp_get_dashboard_stats\',
                        nonce: ptpComm.nonce
                    },
                    success: function(response) {
                        if (response.success) {
                            $(\'.ptp-stat-box\').each(function(index) {
                                $(this).find(\'h3\').text(response.data[index]);
                            });
                        }
                    }
                });
            }, 60000); // Refresh every minute
        }
    });
    
})(jQuery);
');
}


/**
 * ============================================================================
 * PLUGIN ACTIVATION - ENHANCED FOR v5.0
 * ============================================================================
 */
function ptp_comm_activate() {
    global $wpdb;
    
    $charset_collate = $wpdb->get_charset_collate();
    
    // Parent contacts table (enhanced)
    $table_parents = $wpdb->prefix . 'ptp_parents';
    $sql_parents = "CREATE TABLE IF NOT EXISTS $table_parents (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        first_name varchar(100) NOT NULL,
        last_name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20) NOT NULL,
        child_names text,
        child_ages text,
        markets text,
        tags text,
        notes text,
        consent_status varchar(20) DEFAULT 'unknown',
        consent_date datetime,
        opted_out tinyint(1) DEFAULT 0,
        last_contacted_at datetime,
        hubspot_id varchar(50),
        woocommerce_id bigint(20),
        assigned_user_id bigint(20),
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        UNIQUE KEY email (email),
        UNIQUE KEY phone (phone),
        KEY hubspot_id (hubspot_id),
        KEY consent_status (consent_status),
        KEY markets (markets(50)),
        KEY assigned_user_id (assigned_user_id)
    ) $charset_collate;";
    
    // Conversations table (unified inbox)
    $table_conversations = $wpdb->prefix . 'ptp_conversations';
    $sql_conversations = "CREATE TABLE IF NOT EXISTS $table_conversations (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        parent_id bigint(20) unsigned NOT NULL,
        subject varchar(255),
        status varchar(20) DEFAULT 'new',
        priority varchar(20) DEFAULT 'normal',
        owner_user_id bigint(20) unsigned,
        last_message_id bigint(20) unsigned,
        last_message_at datetime,
        last_message_direction varchar(20),
        unread_count int(11) DEFAULT 0,
        channel varchar(20) DEFAULT 'sms',
        related_order_id bigint(20),
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY parent_id (parent_id),
        KEY status (status),
        KEY owner_user_id (owner_user_id),
        KEY last_message_at (last_message_at),
        KEY channel (channel)
    ) $charset_collate;";
    
    // Messages table (unified)
    $table_messages = $wpdb->prefix . 'ptp_messages';
    $sql_messages = "CREATE TABLE IF NOT EXISTS $table_messages (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        conversation_id bigint(20) unsigned NOT NULL,
        parent_id bigint(20) unsigned NOT NULL,
        direction varchar(20) NOT NULL,
        channel varchar(20) NOT NULL DEFAULT 'sms',
        content text NOT NULL,
        twilio_sid varchar(50),
        status varchar(20) NOT NULL DEFAULT 'pending',
        sent_by_user_id bigint(20) unsigned,
        sent_at datetime,
        delivered_at datetime,
        read_at datetime,
        error_message text,
        meta_data longtext,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY conversation_id (conversation_id),
        KEY parent_id (parent_id),
        KEY channel (channel),
        KEY status (status),
        KEY sent_at (sent_at)
    ) $charset_collate;";
    
    // Templates table (saved replies)
    $table_templates = $wpdb->prefix . 'ptp_templates';
    $sql_templates = "CREATE TABLE IF NOT EXISTS $table_templates (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        name varchar(200) NOT NULL,
        category varchar(50) NOT NULL,
        content text NOT NULL,
        shortcode varchar(50),
        channel varchar(20) DEFAULT 'sms',
        is_active tinyint(1) DEFAULT 1,
        usage_count int(11) DEFAULT 0,
        created_by bigint(20) unsigned,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY category (category),
        KEY shortcode (shortcode),
        KEY is_active (is_active)
    ) $charset_collate;";
    
    // Campaigns table (enhanced)
    $table_campaigns = $wpdb->prefix . 'ptp_campaigns';
    $sql_campaigns = "CREATE TABLE IF NOT EXISTS $table_campaigns (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        name varchar(200) NOT NULL,
        segment varchar(100),
        target_tags text,
        target_markets text,
        channel varchar(20) NOT NULL DEFAULT 'sms',
        content text NOT NULL,
        schedule_type varchar(20) NOT NULL DEFAULT 'immediate',
        scheduled_for datetime,
        status varchar(20) NOT NULL DEFAULT 'draft',
        total_recipients int(11) DEFAULT 0,
        sent_count int(11) DEFAULT 0,
        delivered_count int(11) DEFAULT 0,
        failed_count int(11) DEFAULT 0,
        replied_count int(11) DEFAULT 0,
        optout_count int(11) DEFAULT 0,
        estimated_cost decimal(10,2),
        created_by bigint(20) unsigned,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        started_at datetime,
        completed_at datetime,
        PRIMARY KEY  (id),
        KEY status (status),
        KEY scheduled_for (scheduled_for),
        KEY segment (segment)
    ) $charset_collate;";
    
    // Message queue table (for reliability)
    $table_queue = $wpdb->prefix . 'ptp_message_queue';
    $sql_queue = "CREATE TABLE IF NOT EXISTS $table_queue (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        parent_id bigint(20) unsigned NOT NULL,
        channel varchar(20) NOT NULL,
        content text NOT NULL,
        campaign_id bigint(20) unsigned,
        priority int(11) DEFAULT 5,
        attempts int(11) DEFAULT 0,
        max_attempts int(11) DEFAULT 3,
        status varchar(20) DEFAULT 'pending',
        scheduled_for datetime,
        processed_at datetime,
        error_message text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY status (status),
        KEY scheduled_for (scheduled_for),
        KEY campaign_id (campaign_id)
    ) $charset_collate;";
    
    // Voice calls table
    $table_calls = $wpdb->prefix . 'ptp_voice_calls';
    $sql_calls = "CREATE TABLE IF NOT EXISTS $table_calls (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        conversation_id bigint(20) unsigned,
        parent_id bigint(20) unsigned NOT NULL,
        direction varchar(20) NOT NULL,
        twilio_sid varchar(50),
        from_number varchar(20) NOT NULL,
        to_number varchar(20) NOT NULL,
        status varchar(20) NOT NULL,
        duration int(11),
        recording_url text,
        transcription text,
        voicemail_url text,
        started_at datetime,
        ended_at datetime,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY conversation_id (conversation_id),
        KEY parent_id (parent_id),
        KEY status (status)
    ) $charset_collate;";
    
    // Chat sessions table
    $table_chats = $wpdb->prefix . 'ptp_chat_sessions';
    $sql_chats = "CREATE TABLE IF NOT EXISTS $table_chats (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        session_id varchar(50) NOT NULL,
        conversation_id bigint(20) unsigned,
        visitor_name varchar(100),
        visitor_email varchar(100),
        visitor_phone varchar(20),
        parent_id bigint(20) unsigned,
        status varchar(20) DEFAULT 'open',
        last_message_at datetime,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        closed_at datetime,
        PRIMARY KEY  (id),
        UNIQUE KEY session_id (session_id),
        KEY conversation_id (conversation_id),
        KEY parent_id (parent_id)
    ) $charset_collate;";
    
    // Chat messages table
    $table_chat_messages = $wpdb->prefix . 'ptp_chat_messages';
    $sql_chat_messages = "CREATE TABLE IF NOT EXISTS $table_chat_messages (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        session_id varchar(50) NOT NULL,
        conversation_id bigint(20) unsigned,
        sender_type varchar(20) NOT NULL,
        content text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY session_id (session_id),
        KEY conversation_id (conversation_id)
    ) $charset_collate;";
    
    // Compliance log table
    $table_compliance = $wpdb->prefix . 'ptp_compliance_log';
    $sql_compliance = "CREATE TABLE IF NOT EXISTS $table_compliance (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        parent_id bigint(20) unsigned NOT NULL,
        event_type varchar(50) NOT NULL,
        channel varchar(20) NOT NULL,
        details text,
        ip_address varchar(50),
        user_agent text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY parent_id (parent_id),
        KEY event_type (event_type),
        KEY created_at (created_at)
    ) $charset_collate;";
    
    // Audit log table (NEW for v5)
    $table_audit = $wpdb->prefix . 'ptp_audit_log';
    $sql_audit = "CREATE TABLE IF NOT EXISTS $table_audit (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        user_id bigint(20) unsigned NOT NULL,
        action varchar(100) NOT NULL,
        entity_type varchar(50),
        entity_id bigint(20) unsigned,
        payload longtext,
        ip_address varchar(50),
        user_agent text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        KEY user_id (user_id),
        KEY action (action),
        KEY entity_type (entity_type),
        KEY created_at (created_at)
    ) $charset_collate;";
    
    // User market access table (NEW for v5)
    $table_user_markets = $wpdb->prefix . 'ptp_user_markets';
    $sql_user_markets = "CREATE TABLE IF NOT EXISTS $table_user_markets (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        user_id bigint(20) unsigned NOT NULL,
        market varchar(50) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        UNIQUE KEY user_market (user_id, market),
        KEY user_id (user_id)
    ) $charset_collate;";
    
    // Analytics snapshots table (NEW for v5)
    $table_analytics = $wpdb->prefix . 'ptp_analytics_snapshots';
    $sql_analytics = "CREATE TABLE IF NOT EXISTS $table_analytics (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        metric_date date NOT NULL,
        messages_sent int(11) DEFAULT 0,
        messages_received int(11) DEFAULT 0,
        calls_made int(11) DEFAULT 0,
        calls_received int(11) DEFAULT 0,
        conversations_new int(11) DEFAULT 0,
        conversations_resolved int(11) DEFAULT 0,
        optouts int(11) DEFAULT 0,
        response_rate decimal(5,2),
        market varchar(50),
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        UNIQUE KEY date_market (metric_date, market),
        KEY metric_date (metric_date)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql_parents);
    dbDelta($sql_conversations);
    dbDelta($sql_messages);
    dbDelta($sql_templates);
    dbDelta($sql_campaigns);
    dbDelta($sql_queue);
    dbDelta($sql_calls);
    dbDelta($sql_chats);
    dbDelta($sql_chat_messages);
    dbDelta($sql_compliance);
    dbDelta($sql_audit);
    dbDelta($sql_user_markets);
    dbDelta($sql_analytics);
    
    // Set default options
    add_option('ptp_comm_twilio_account_sid', '');
    add_option('ptp_comm_twilio_auth_token', '');
    add_option('ptp_comm_twilio_phone_number', '');
    add_option('ptp_comm_twilio_environment', 'live'); // NEW: live or sandbox
    add_option('ptp_comm_hubspot_api_key', '');
    add_option('ptp_comm_slack_webhook_url', '');
    add_option('ptp_comm_quiet_hours_enabled', '1');
    add_option('ptp_comm_quiet_hours_start', '21:00');
    add_option('ptp_comm_quiet_hours_end', '08:00');
    add_option('ptp_comm_timezone', 'America/New_York');
    add_option('ptp_comm_business_hours_start', '9');
    add_option('ptp_comm_business_hours_end', '18');
    add_option('ptp_comm_operator_phone', '');
    add_option('ptp_comm_support_phone', '');
    add_option('ptp_comm_a2p_status', 'pending');
    add_option('ptp_comm_brand_id', '');
    add_option('ptp_comm_campaign_id', '');
    add_option('ptp_comm_default_signature', 'Reply STOP to opt out.'); // NEW
    add_option('ptp_comm_signature_enabled', '1'); // NEW
    add_option('ptp_comm_queue_enabled', '1'); // NEW
    add_option('ptp_comm_queue_batch_size', '50'); // NEW
    
    // Create custom roles with capabilities
    ptp_comm_create_roles();
    
    // Install default templates
    ptp_comm_install_default_templates();
    
    // Schedule queue processor
    if (!wp_next_scheduled('ptp_comm_process_queue')) {
        wp_schedule_event(time(), 'every_minute', 'ptp_comm_process_queue');
    }
    
    // Schedule analytics snapshots
    if (!wp_next_scheduled('ptp_comm_create_analytics_snapshot')) {
        wp_schedule_event(strtotime('tomorrow 00:00'), 'daily', 'ptp_comm_create_analytics_snapshot');
    }
    
    flush_rewrite_rules();
    
    do_action('ptp_comm_activated');
}
register_activation_hook(__FILE__, 'ptp_comm_activate');

/**
 * Create Custom Roles
 */
function ptp_comm_create_roles() {
    // PTP Admin role
    add_role('ptp_commhub_admin', 'PTP Communication Admin', array(
        'read' => true,
        'manage_ptp_commhub_settings' => true,
        'view_ptp_conversations' => true,
        'send_ptp_messages' => true,
        'view_ptp_analytics' => true,
        'manage_ptp_campaigns' => true,
        'manage_ptp_templates' => true,
        'view_ptp_audit_log' => true,
        'manage_ptp_users' => true
    ));
    
    // PTP Agent role
    add_role('ptp_commhub_agent', 'PTP Communication Agent', array(
        'read' => true,
        'view_ptp_conversations' => true,
        'send_ptp_messages' => true,
        'manage_ptp_templates' => true,
        'view_ptp_analytics' => true
    ));
    
    // Grant capabilities to admin
    $admin = get_role('administrator');
    if ($admin) {
        $admin->add_cap('manage_ptp_commhub_settings');
        $admin->add_cap('view_ptp_conversations');
        $admin->add_cap('send_ptp_messages');
        $admin->add_cap('view_ptp_analytics');
        $admin->add_cap('manage_ptp_campaigns');
        $admin->add_cap('manage_ptp_templates');
        $admin->add_cap('view_ptp_audit_log');
        $admin->add_cap('manage_ptp_users');
    }
}

// Ensure capabilities stay in sync even after updates
function ptp_comm_sync_capabilities() {
    $admin = get_role('administrator');
    if ($admin) {
        foreach (array(
            'manage_ptp_commhub_settings',
            'view_ptp_conversations',
            'send_ptp_messages',
            'view_ptp_analytics',
            'manage_ptp_campaigns',
            'manage_ptp_templates',
            'view_ptp_audit_log',
            'manage_ptp_users'
        ) as $cap) {
            if (!$admin->has_cap($cap)) {
                $admin->add_cap($cap);
            }
        }
    }

    $agent = get_role('ptp_commhub_agent');
    if ($agent && !$agent->has_cap('view_ptp_analytics')) {
        $agent->add_cap('view_ptp_analytics');
    }
}
add_action('admin_init', 'ptp_comm_sync_capabilities');

/**
 * Install Default Templates
 */
function ptp_comm_install_default_templates() {
    global $wpdb;
    
    $defaults = array(
        array(
            'name' => 'Order Confirmation',
            'category' => 'Confirmation',
            'shortcode' => '/confirm',
            'content' => 'Hi {{first_name}}! Thanks for registering {{child_name}} for {{event_type}}. See you on {{event_date}}! Reply STOP to opt out.'
        ),
        array(
            'name' => '7-Day Reminder',
            'category' => 'Reminder',
            'shortcode' => '/7day',
            'content' => 'Reminder: {{child_name}}\'s {{event_type}} is 1 week away on {{event_date}} at {{venue}}. Bring water, sunscreen & gear!'
        ),
        array(
            'name' => 'Weather Delay',
            'category' => 'Weather',
            'shortcode' => '/weather',
            'content' => 'UPDATE: Due to weather, {{event_type}} at {{venue}} on {{event_date}} is cancelled. We\'ll reach out to reschedule. Thanks!'
        ),
        array(
            'name' => 'Late Arrival',
            'category' => 'Support',
            'shortcode' => '/late',
            'content' => 'No problem! See you when you get here. We\'ll have {{child_name}} jump right in.'
        ),
        array(
            'name' => 'Summer Priority',
            'category' => 'Marketing',
            'shortcode' => '/summer',
            'content' => 'Hi {{first_name}}! As a {{event_type}} family, you get early access to summer camp registration. Save your spot: {{camp_url}}'
        )
    );
    
    foreach ($defaults as $template) {
        $exists = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}ptp_templates WHERE shortcode = %s",
            $template['shortcode']
        ));
        
        if (!$exists) {
            $wpdb->insert(
                $wpdb->prefix . 'ptp_templates',
                array(
                    'name' => $template['name'],
                    'category' => $template['category'],
                    'shortcode' => $template['shortcode'],
                    'content' => $template['content'],
                    'channel' => 'sms',
                    'is_active' => 1
                ),
                array('%s', '%s', '%s', '%s', '%s', '%d')
            );
        }
    }
}

/**
 * Plugin Deactivation
 */
function ptp_comm_deactivate() {
    wp_clear_scheduled_hook('ptp_comm_process_queue');
    wp_clear_scheduled_hook('ptp_comm_create_analytics_snapshot');
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'ptp_comm_deactivate');

/**
 * Load Text Domain
 */
function ptp_comm_load_textdomain() {
    load_plugin_textdomain('ptp-communication-hub', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'ptp_comm_load_textdomain');

/**
 * ============================================================================
 * ENQUEUE ENTERPRISE ASSETS
 * ============================================================================
 */
function ptp_comm_admin_enqueue_scripts($hook) {
    if (strpos($hook, 'ptp-communication-hub') === false) {
        return;
    }

    $css = defined('PTP_COMM_INLINE_CSS') ? PTP_COMM_INLINE_CSS : '';
    $js  = defined('PTP_COMM_INLINE_JS') ? PTP_COMM_INLINE_JS : '';

    if (empty($css) && file_exists(PTP_COMM_PLUGIN_DIR . 'assets/css/ptp-commhub-admin.css')) {
        $css = file_get_contents(PTP_COMM_PLUGIN_DIR . 'assets/css/ptp-commhub-admin.css');
    }

    if (empty($js) && file_exists(PTP_COMM_PLUGIN_DIR . 'assets/js/admin.js')) {
        $js = file_get_contents(PTP_COMM_PLUGIN_DIR . 'assets/js/admin.js');
    }

    wp_register_style(
        'ptp-commhub-admin',
        false,
        array(),
        PTP_COMM_VERSION
    );
    wp_enqueue_style('ptp-commhub-admin');

    if (!empty($css)) {
        wp_add_inline_style('ptp-commhub-admin', $css);
    }

    wp_register_script(
        'ptp-commhub-admin',
        '',
        array('jquery'),
        PTP_COMM_VERSION,
        true
    );

    wp_localize_script('ptp-commhub-admin', 'ptpCommHub', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'restUrl' => rest_url('ptp-commhub/v1/'),
        'nonce' => wp_create_nonce('ptp_commhub_nonce'),
        'currentUser' => get_current_user_id(),
        'userCaps' => array(
            'canManageSettings' => current_user_can('manage_ptp_commhub_settings'),
            'canViewAnalytics' => current_user_can('view_ptp_analytics'),
            'canManageCampaigns' => current_user_can('manage_ptp_campaigns')
        )
    ));

    wp_enqueue_script('ptp-commhub-admin');

    if (!empty($js)) {
        wp_add_inline_script('ptp-commhub-admin', $js);
    }
}

add_action('admin_enqueue_scripts', 'ptp_comm_admin_enqueue_scripts');

/**
 * Add custom cron schedule for queue processing
 */
function ptp_comm_cron_schedules($schedules) {
    $schedules['every_minute'] = array(
        'interval' => 60,
        'display' => __('Every Minute', 'ptp-communication-hub')
    );
    return $schedules;
}
add_filter('cron_schedules', 'ptp_comm_cron_schedules');

/**
 * PTP Communication Hub v5.0 - Part 2
 * Admin Menu, Unified Inbox, and Core Pages
 */

/**
 * ============================================================================
 * ADMIN MENU - ENTERPRISE LAYOUT
 * ============================================================================
 */
function ptp_commhub_register_menu() {
    add_menu_page(
        __('PTP Communication Hub', 'ptp-communication-hub'),
        __('PTP Comms', 'ptp-communication-hub'),
        'view_ptp_conversations',
        'ptp-communication-hub',
        'ptp_commhub_render_inbox',
        'dashicons-megaphone',
        25
    );
    
    add_submenu_page(
        'ptp-communication-hub',
        __('Inbox', 'ptp-communication-hub'),
        __('Inbox', 'ptp-communication-hub'),
        'view_ptp_conversations',
        'ptp-communication-hub',
        'ptp_commhub_render_inbox'
    );
    
    add_submenu_page(
        'ptp-communication-hub',
        __('Campaigns', 'ptp-communication-hub'),
        __('Campaigns', 'ptp-communication-hub'),
        'manage_ptp_campaigns',
        'ptp-commhub-campaigns',
        'ptp_commhub_render_campaigns'
    );
    
    add_submenu_page(
        'ptp-communication-hub',
        __('Templates', 'ptp-communication-hub'),
        __('Templates', 'ptp-communication-hub'),
        'manage_ptp_templates',
        'ptp-commhub-templates',
        'ptp_commhub_render_templates'
    );
    
    add_submenu_page(
        'ptp-communication-hub',
        __('Analytics', 'ptp-communication-hub'),
        __('Analytics', 'ptp-communication-hub'),
        'view_ptp_analytics',
        'ptp-commhub-analytics',
        'ptp_commhub_render_analytics'
    );
    
    add_submenu_page(
        'ptp-communication-hub',
        __('Contacts', 'ptp-communication-hub'),
        __('Contacts', 'ptp-communication-hub'),
        'view_ptp_conversations',
        'ptp-commhub-contacts',
        'ptp_commhub_render_contacts'
    );
    
    add_submenu_page(
        'ptp-communication-hub',
        __('Settings', 'ptp-communication-hub'),
        __('Settings', 'ptp-communication-hub'),
        'manage_ptp_commhub_settings',
        'ptp-commhub-settings',
        'ptp_commhub_render_settings'
    );
    
    if (current_user_can('view_ptp_audit_log')) {
        add_submenu_page(
            'ptp-communication-hub',
            __('System Log', 'ptp-communication-hub'),
            __('System Log', 'ptp-communication-hub'),
            'view_ptp_audit_log',
            'ptp-commhub-audit',
            'ptp_commhub_render_audit_log'
        );
    }
}
add_action('admin_menu', 'ptp_commhub_register_menu');

/**
 * ============================================================================
 * UNIFIED INBOX PAGE
 * ============================================================================
 */
function ptp_commhub_render_inbox() {
    global $wpdb;
    
    // Handle actions
    if (isset($_POST['send_message']) && wp_verify_nonce($_POST['_wpnonce'], 'send_message')) {
        $conversation_id = intval($_POST['conversation_id']);
        $content = sanitize_textarea_field($_POST['message_content']);
        
        ptp_commhub_send_message($conversation_id, $content, 'sms');
        
        echo '<div class="notice notice-success"><p>Message sent!</p></div>';
    }
    
    // Get filter parameters
    $status_filter = isset($_GET['status']) ? sanitize_text_field($_GET['status']) : 'all';
    $channel_filter = isset($_GET['channel']) ? sanitize_text_field($_GET['channel']) : 'all';
    $assigned_filter = isset($_GET['assigned']) ? intval($_GET['assigned']) : 0;
    $market_filter = isset($_GET['market']) ? sanitize_text_field($_GET['market']) : 'all';
    
    // Build query
    $where = array('1=1');
    
    if ($status_filter !== 'all') {
        $where[] = $wpdb->prepare("c.status = %s", $status_filter);
    }
    
    if ($channel_filter !== 'all') {
        $where[] = $wpdb->prepare("c.channel = %s", $channel_filter);
    }
    
    if ($assigned_filter > 0) {
        $where[] = $wpdb->prepare("c.owner_user_id = %d", $assigned_filter);
    } elseif ($assigned_filter === -1) {
        $where[] = "c.owner_user_id IS NULL";
    }
    
    if ($market_filter !== 'all') {
        $where[] = $wpdb->prepare("p.markets LIKE %s", '%' . $market_filter . '%');
    }
    
    // Apply market scoping for non-admin users
    if (!current_user_can('manage_ptp_commhub_settings')) {
        $user_markets = ptp_commhub_get_user_markets(get_current_user_id());
        if (!empty($user_markets)) {
            $market_conditions = array();
            foreach ($user_markets as $market) {
                $market_conditions[] = $wpdb->prepare("p.markets LIKE %s", '%' . $market . '%');
            }
            $where[] = '(' . implode(' OR ', $market_conditions) . ')';
        }
    }
    
    $where_sql = implode(' AND ', $where);
    
    // Get conversations
    $conversations = $wpdb->get_results("
        SELECT 
            c.*,
            p.first_name,
            p.last_name,
            p.phone,
            p.email,
            p.child_names,
            p.markets,
            p.consent_status,
            u.display_name as owner_name,
            m.content as last_message_content,
            m.direction as last_message_direction
        FROM {$wpdb->prefix}ptp_conversations c
        JOIN {$wpdb->prefix}ptp_parents p ON c.parent_id = p.id
        LEFT JOIN {$wpdb->users} u ON c.owner_user_id = u.ID
        LEFT JOIN {$wpdb->prefix}ptp_messages m ON c.last_message_id = m.id
        WHERE {$where_sql}
        ORDER BY c.last_message_at DESC
        LIMIT 100
    ");
    
    // Get stats for filters
    $stats = $wpdb->get_row("
        SELECT 
            COUNT(*) as total,
            SUM(CASE WHEN status = 'new' THEN 1 ELSE 0 END) as new_count,
            SUM(CASE WHEN status = 'waiting_parent' THEN 1 ELSE 0 END) as waiting_parent,
            SUM(CASE WHEN status = 'waiting_ptp' THEN 1 ELSE 0 END) as waiting_ptp,
            SUM(CASE WHEN owner_user_id IS NULL THEN 1 ELSE 0 END) as unassigned
        FROM {$wpdb->prefix}ptp_conversations c
        JOIN {$wpdb->prefix}ptp_parents p ON c.parent_id = p.id
        WHERE {$where_sql}
    ");
    
    // Get available markets
    $markets = $wpdb->get_col("
        SELECT DISTINCT TRIM(market_item) as market
        FROM {$wpdb->prefix}ptp_parents
        CROSS JOIN JSON_TABLE(
            CONCAT('[\"', REPLACE(TRIM(markets), ',', '\",\"'), '\"]'),
            '$[*]' COLUMNS(market_item VARCHAR(50) PATH '$')
        ) AS markets_split
        WHERE markets IS NOT NULL AND markets != ''
        ORDER BY market
    ");
    
    // Viewing specific conversation?
    $viewing_conversation = null;
    if (isset($_GET['conversation_id'])) {
        $conv_id = intval($_GET['conversation_id']);
        $viewing_conversation = $wpdb->get_row($wpdb->prepare("
            SELECT 
                c.*,
                p.first_name,
                p.last_name,
                p.phone,
                p.email,
                p.child_names,
                p.child_ages,
                p.markets,
                p.notes,
                p.consent_status
            FROM {$wpdb->prefix}ptp_conversations c
            JOIN {$wpdb->prefix}ptp_parents p ON c.parent_id = p.id
            WHERE c.id = %d
        ", $conv_id));
        
        if ($viewing_conversation) {
            // Get messages
            $messages = $wpdb->get_results($wpdb->prepare("
                SELECT 
                    m.*,
                    u.display_name as sent_by_name
                FROM {$wpdb->prefix}ptp_messages m
                LEFT JOIN {$wpdb->users} u ON m.sent_by_user_id = u.ID
                WHERE m.conversation_id = %d
                ORDER BY m.created_at ASC
            ", $conv_id));
            
            // Get related orders
            $related_orders = array();
            if ($viewing_conversation->related_order_id) {
                $order = wc_get_order($viewing_conversation->related_order_id);
                if ($order) {
                    $related_orders[] = $order;
                }
            }
            
            // Mark as read
            $wpdb->update(
                $wpdb->prefix . 'ptp_conversations',
                array('unread_count' => 0),
                array('id' => $conv_id),
                array('%d'),
                array('%d')
            );
        }
    }
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <div class="ptp-commhub-title">
                    <span class="dashicons dashicons-megaphone" style="color: var(--ptp-yellow); margin-right: 8px;"></span>
                    Unified Inbox
                </div>
                <p class="description">All conversations across SMS, voice, and chat</p>
            </div>
            <div class="ptp-commhub-badge">
                <span class="dashicons dashicons-shield-alt"></span>
                <span>Enterprise</span>
            </div>
        </header>
        
        <div class="ptp-commhub-grid">
            <!-- Sidebar Filters -->
            <aside class="ptp-commhub-card">
                <div class="ptp-commhub-card-title">Filters</div>
                
                <div class="ptp-filter-section">
                    <label class="ptp-filter-label">Status</label>
                    <select class="ptp-filter-select" onchange="ptp_updateFilter('status', this.value)">
                        <option value="all" <?php selected($status_filter, 'all'); ?>>All (<?php echo esc_html($stats->total); ?>)</option>
                        <option value="new" <?php selected($status_filter, 'new'); ?>>New (<?php echo esc_html($stats->new_count); ?>)</option>
                        <option value="waiting_parent" <?php selected($status_filter, 'waiting_parent'); ?>>Waiting on Parent (<?php echo esc_html($stats->waiting_parent); ?>)</option>
                        <option value="waiting_ptp" <?php selected($status_filter, 'waiting_ptp'); ?>>Waiting on PTP (<?php echo esc_html($stats->waiting_ptp); ?>)</option>
                        <option value="resolved" <?php selected($status_filter, 'resolved'); ?>>Resolved</option>
                    </select>
                </div>
                
                <div class="ptp-filter-section">
                    <label class="ptp-filter-label">Channel</label>
                    <select class="ptp-filter-select" onchange="ptp_updateFilter('channel', this.value)">
                        <option value="all" <?php selected($channel_filter, 'all'); ?>>All Channels</option>
                        <option value="sms" <?php selected($channel_filter, 'sms'); ?>>SMS</option>
                        <option value="voice" <?php selected($channel_filter, 'voice'); ?>>Voice</option>
                        <option value="chat" <?php selected($channel_filter, 'chat'); ?>>Live Chat</option>
                    </select>
                </div>
                
                <div class="ptp-filter-section">
                    <label class="ptp-filter-label">Assignment</label>
                    <select class="ptp-filter-select" onchange="ptp_updateFilter('assigned', this.value)">
                        <option value="0" <?php selected($assigned_filter, 0); ?>>All</option>
                        <option value="-1" <?php selected($assigned_filter, -1); ?>>Unassigned (<?php echo esc_html($stats->unassigned); ?>)</option>
                        <option value="<?php echo get_current_user_id(); ?>" <?php selected($assigned_filter, get_current_user_id()); ?>>My Conversations</option>
                    </select>
                </div>
                
                <?php if (!empty($markets)): ?>
                <div class="ptp-filter-section">
                    <label class="ptp-filter-label">Market</label>
                    <select class="ptp-filter-select" onchange="ptp_updateFilter('market', this.value)">
                        <option value="all" <?php selected($market_filter, 'all'); ?>>All Markets</option>
                        <?php foreach ($markets as $market): ?>
                            <option value="<?php echo esc_attr($market); ?>" <?php selected($market_filter, $market); ?>><?php echo esc_html($market); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php endif; ?>
                
                <div class="ptp-filter-section" style="margin-top: 20px;">
                    <div class="ptp-commhub-card-title" style="margin-bottom: 8px;">System Health</div>
                    <?php
                    $twilio_configured = !empty(get_option('ptp_comm_twilio_account_sid'));
                    $hubspot_configured = !empty(get_option('ptp_comm_hubspot_api_key'));
                    $queue_enabled = get_option('ptp_comm_queue_enabled') === '1';
                    ?>
                    
                    <div class="ptp-health-chip">
                        <span class="ptp-health-dot <?php echo $twilio_configured ? 'ptp-health-dot--online' : 'ptp-health-dot--offline'; ?>"></span>
                        <span>Twilio</span>
                    </div>
                    
                    <div class="ptp-health-chip">
                        <span class="ptp-health-dot <?php echo $hubspot_configured ? 'ptp-health-dot--online' : 'ptp-health-dot--offline'; ?>"></span>
                        <span>HubSpot</span>
                    </div>
                    
                    <div class="ptp-health-chip">
                        <span class="ptp-health-dot <?php echo $queue_enabled ? 'ptp-health-dot--online' : 'ptp-health-dot--offline'; ?>"></span>
                        <span>Message Queue</span>
                    </div>
                </div>
                
                <div class="ptp-filter-section" style="margin-top: 20px;">
                    <div class="ptp-commhub-card-title" style="margin-bottom: 8px;">Quiet Hours</div>
                    <?php
                    $quiet_enabled = get_option('ptp_comm_quiet_hours_enabled') === '1';
                    $quiet_start = get_option('ptp_comm_quiet_hours_start', '21:00');
                    $quiet_end = get_option('ptp_comm_quiet_hours_end', '08:00');
                    
                    $timezone = get_option('ptp_comm_timezone', 'America/New_York');
                    date_default_timezone_set($timezone);
                    $current_time = date('H:i');
                    
                    $in_quiet_hours = false;
                    if ($quiet_enabled) {
                        if ($quiet_start > $quiet_end) {
                            $in_quiet_hours = ($current_time >= $quiet_start || $current_time < $quiet_end);
                        } else {
                            $in_quiet_hours = ($current_time >= $quiet_start && $current_time < $quiet_end);
                        }
                    }
                    ?>
                    
                    <div class="ptp-commhub-chip <?php echo $in_quiet_hours ? 'ptp-commhub-chip--quiet' : 'ptp-commhub-chip--active'; ?>">
                        <span class="ptp-commhub-chip-dot" style="background: <?php echo $in_quiet_hours ? '#f59e0b' : '#10b981'; ?>;"></span>
                        <span><?php echo $in_quiet_hours ? 'Quiet Hours Active' : 'Ready to Send'; ?></span>
                    </div>
                    
                    <?php if ($quiet_enabled): ?>
                        <p class="description" style="margin-top: 8px; font-size: 11px;">
                            <?php echo esc_html($quiet_start); ?> - <?php echo esc_html($quiet_end); ?> (<?php echo esc_html($timezone); ?>)
                        </p>
                    <?php endif; ?>
                </div>
            </aside>
            
            <!-- Main Content Area -->
            <main>
                <?php if ($viewing_conversation): ?>
                    <!-- Conversation Detail View -->
                    <div class="ptp-commhub-card">
                        <div class="ptp-conversation-header">
                            <div class="ptp-conversation-header-left">
                                <a href="<?php echo admin_url('admin.php?page=ptp-communication-hub'); ?>" class="ptp-back-button">
                                    <span class="dashicons dashicons-arrow-left-alt2"></span> Back to Inbox
                                </a>
                                
                                <div class="ptp-conversation-title">
                                    <h2><?php echo esc_html($viewing_conversation->first_name . ' ' . $viewing_conversation->last_name); ?></h2>
                                    <div class="ptp-conversation-meta">
                                        <span class="ptp-commhub-chip">
                                            <span class="dashicons dashicons-phone"></span>
                                            <?php echo esc_html($viewing_conversation->phone); ?>
                                        </span>
                                        
                                        <?php if ($viewing_conversation->email): ?>
                                            <span class="ptp-commhub-chip">
                                                <span class="dashicons dashicons-email"></span>
                                                <?php echo esc_html($viewing_conversation->email); ?>
                                            </span>
                                        <?php endif; ?>
                                        
                                        <?php if ($viewing_conversation->child_names): ?>
                                            <span class="ptp-commhub-chip">
                                                <span class="dashicons dashicons-groups"></span>
                                                <?php echo esc_html($viewing_conversation->child_names); ?>
                                            </span>
                                        <?php endif; ?>
                                        
                                        <span class="ptp-status-badge ptp-status-<?php echo esc_attr($viewing_conversation->status); ?>">
                                            <?php echo esc_html(ucwords(str_replace('_', ' ', $viewing_conversation->status))); ?>
                                        </span>
                                        
                                        <span class="ptp-consent-badge ptp-consent-<?php echo esc_attr($viewing_conversation->consent_status); ?>">
                                            <?php echo esc_html(ucfirst($viewing_conversation->consent_status)); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="ptp-conversation-actions">
                                <select class="ptp-action-select" onchange="ptp_updateConversationStatus(<?php echo $viewing_conversation->id; ?>, this.value)">
                                    <option value="">Change Status...</option>
                                    <option value="new">New</option>
                                    <option value="waiting_parent">Waiting on Parent</option>
                                    <option value="waiting_ptp">Waiting on PTP</option>
                                    <option value="resolved">Resolved</option>
                                </select>
                                
                                <select class="ptp-action-select" onchange="ptp_assignConversation(<?php echo $viewing_conversation->id; ?>, this.value)">
                                    <option value="">Assign to...</option>
                                    <option value="<?php echo get_current_user_id(); ?>">Me</option>
                                    <?php
                                    $users = get_users(array('capability' => 'view_ptp_conversations'));
                                    foreach ($users as $user) {
                                        if ($user->ID != get_current_user_id()) {
                                            echo '<option value="' . esc_attr($user->ID) . '">' . esc_html($user->display_name) . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Message Thread -->
                        <div class="ptp-message-thread">
                            <?php if (!empty($messages)): ?>
                                <?php foreach ($messages as $msg): ?>
                                    <div class="ptp-message ptp-message-<?php echo esc_attr($msg->direction); ?> ptp-message-<?php echo esc_attr($msg->channel); ?>">
                                        <div class="ptp-message-avatar">
                                            <?php if ($msg->direction === 'inbound'): ?>
                                                <span class="dashicons dashicons-admin-users"></span>
                                            <?php else: ?>
                                                <span class="dashicons dashicons-businessman"></span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <div class="ptp-message-content">
                                            <div class="ptp-message-header">
                                                <strong>
                                                    <?php 
                                                    if ($msg->direction === 'inbound') {
                                                        echo esc_html($viewing_conversation->first_name);
                                                    } else {
                                                        echo esc_html($msg->sent_by_name ?: 'System');
                                                    }
                                                    ?>
                                                </strong>
                                                <span class="ptp-message-time"><?php echo esc_html(date('M j, Y g:i A', strtotime($msg->created_at))); ?></span>
                                                <span class="ptp-message-channel-badge"><?php echo esc_html(strtoupper($msg->channel)); ?></span>
                                            </div>
                                            <div class="ptp-message-body">
                                                <?php echo nl2br(esc_html($msg->content)); ?>
                                            </div>
                                            <div class="ptp-message-footer">
                                                <span class="ptp-message-status ptp-message-status-<?php echo esc_attr($msg->status); ?>">
                                                    <?php echo esc_html(ucfirst($msg->status)); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="ptp-message-empty">
                                    <span class="dashicons dashicons-format-chat"></span>
                                    <p>No messages yet. Start the conversation below.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Message Composer -->
                        <div class="ptp-message-composer">
                            <form method="post" class="ptp-composer-form">
                                <?php wp_nonce_field('send_message'); ?>
                                <input type="hidden" name="conversation_id" value="<?php echo esc_attr($viewing_conversation->id); ?>">
                                
                                <div class="ptp-composer-toolbar">
                                    <select class="ptp-template-select" onchange="ptp_insertTemplate(this.value)">
                                        <option value="">Insert template...</option>
                                        <?php
                                        $templates = $wpdb->get_results("
                                            SELECT * FROM {$wpdb->prefix}ptp_templates 
                                            WHERE is_active = 1 AND channel = 'sms'
                                            ORDER BY category, name
                                        ");
                                        $current_cat = '';
                                        foreach ($templates as $tpl) {
                                            if ($tpl->category !== $current_cat) {
                                                if ($current_cat) echo '</optgroup>';
                                                echo '<optgroup label="' . esc_attr($tpl->category) . '">';
                                                $current_cat = $tpl->category;
                                            }
                                            echo '<option value="' . esc_attr($tpl->id) . '" data-content="' . esc_attr($tpl->content) . '">';
                                            echo esc_html($tpl->name);
                                            if ($tpl->shortcode) {
                                                echo ' (' . esc_html($tpl->shortcode) . ')';
                                            }
                                            echo '</option>';
                                        }
                                        if ($current_cat) echo '</optgroup>';
                                        ?>
                                    </select>
                                    
                                    <button type="button" class="ptp-pill-button" onclick="ptp_showMergeTags()">
                                        <span class="dashicons dashicons-tag"></span> Merge Tags
                                    </button>
                                </div>
                                
                                <textarea 
                                    name="message_content" 
                                    id="ptp-message-content"
                                    rows="4" 
                                    class="ptp-composer-textarea" 
                                    placeholder="Type your message..."
                                    required
                                ></textarea>
                                
                                <div class="ptp-composer-footer">
                                    <div class="ptp-char-counter">
                                        <span id="ptp-char-count">0</span> characters
                                        <span class="ptp-separator">•</span>
                                        <span id="ptp-sms-segments">0</span> SMS segments
                                    </div>
                                    
                                    <button type="submit" name="send_message" class="ptp-pill-button ptp-pill-button--primary">
                                        <span class="dashicons dashicons-email"></span>
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Sidebar Info -->
                    <div class="ptp-commhub-card" style="margin-top: 20px;">
                        <div class="ptp-commhub-card-title">Contact Information</div>
                        
                        <?php if ($viewing_conversation->child_names): ?>
                            <div class="ptp-info-row">
                                <label>Children:</label>
                                <span><?php echo esc_html($viewing_conversation->child_names); ?></span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($viewing_conversation->child_ages): ?>
                            <div class="ptp-info-row">
                                <label>Ages:</label>
                                <span><?php echo esc_html($viewing_conversation->child_ages); ?></span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($viewing_conversation->markets): ?>
                            <div class="ptp-info-row">
                                <label>Markets:</label>
                                <span><?php echo esc_html($viewing_conversation->markets); ?></span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($viewing_conversation->notes): ?>
                            <div class="ptp-info-row">
                                <label>Notes:</label>
                                <p><?php echo nl2br(esc_html($viewing_conversation->notes)); ?></p>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($related_orders)): ?>
                            <div class="ptp-commhub-card-title" style="margin-top: 20px;">Related Orders</div>
                            <?php foreach ($related_orders as $order): ?>
                                <div class="ptp-order-card">
                                    <div class="ptp-order-header">
                                        <strong>Order #<?php echo esc_html($order->get_order_number()); ?></strong>
                                        <span class="ptp-order-status"><?php echo esc_html($order->get_status()); ?></span>
                                    </div>
                                    <div class="ptp-order-date">
                                        <?php echo esc_html(date('M j, Y', strtotime($order->get_date_created()))); ?>
                                    </div>
                                    <div class="ptp-order-total">
                                        <?php echo wp_kses_post($order->get_formatted_order_total()); ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    
                <?php else: ?>
                    <!-- Conversation List View -->
                    <div class="ptp-commhub-card">
                        <div class="ptp-inbox-header">
                            <h2>Conversations</h2>
                            <div class="ptp-inbox-search">
                                <input type="text" class="ptp-search-input" placeholder="Search conversations..." onkeyup="ptp_searchConversations(this.value)">
                                <span class="dashicons dashicons-search"></span>
                            </div>
                        </div>
                        
                        <?php if (!empty($conversations)): ?>
                            <div class="ptp-conversation-list">
                                <?php foreach ($conversations as $conv): ?>
                                    <a href="<?php echo admin_url('admin.php?page=ptp-communication-hub&conversation_id=' . $conv->id); ?>" class="ptp-conversation-item <?php echo $conv->unread_count > 0 ? 'ptp-conversation-unread' : ''; ?>">
                                        <div class="ptp-conversation-avatar">
                                            <span class="dashicons dashicons-admin-users"></span>
                                            <?php if ($conv->unread_count > 0): ?>
                                                <span class="ptp-unread-badge"><?php echo esc_html($conv->unread_count); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <div class="ptp-conversation-details">
                                            <div class="ptp-conversation-name">
                                                <?php echo esc_html($conv->first_name . ' ' . $conv->last_name); ?>
                                                
                                                <span class="ptp-channel-icon ptp-channel-<?php echo esc_attr($conv->channel); ?>">
                                                    <?php 
                                                    $channel_icons = array(
                                                        'sms' => 'email',
                                                        'voice' => 'phone',
                                                        'chat' => 'format-chat'
                                                    );
                                                    ?>
                                                    <span class="dashicons dashicons-<?php echo esc_attr($channel_icons[$conv->channel] ?? 'email'); ?>"></span>
                                                </span>
                                            </div>
                                            
                                            <div class="ptp-conversation-preview">
                                                <?php 
                                                if ($conv->last_message_direction === 'inbound') {
                                                    echo '<strong>Parent:</strong> ';
                                                }
                                                echo esc_html(substr($conv->last_message_content, 0, 60)) . '...';
                                                ?>
                                            </div>
                                            
                                            <div class="ptp-conversation-meta-row">
                                                <?php if ($conv->child_names): ?>
                                                    <span class="ptp-meta-tag">
                                                        <span class="dashicons dashicons-groups"></span>
                                                        <?php echo esc_html($conv->child_names); ?>
                                                    </span>
                                                <?php endif; ?>
                                                
                                                <?php if ($conv->markets): ?>
                                                    <span class="ptp-meta-tag">
                                                        <span class="dashicons dashicons-location"></span>
                                                        <?php echo esc_html($conv->markets); ?>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        <div class="ptp-conversation-right">
                                            <div class="ptp-conversation-time">
                                                <?php echo esc_html(human_time_diff(strtotime($conv->last_message_at), current_time('timestamp')) . ' ago'); ?>
                                            </div>
                                            
                                            <span class="ptp-status-badge ptp-status-<?php echo esc_attr($conv->status); ?>">
                                                <?php echo esc_html(ucwords(str_replace('_', ' ', $conv->status))); ?>
                                            </span>
                                            
                                            <?php if ($conv->owner_name): ?>
                                                <div class="ptp-assigned-badge">
                                                    <span class="dashicons dashicons-businessman"></span>
                                                    <?php echo esc_html($conv->owner_name); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="ptp-inbox-empty">
                                <span class="dashicons dashicons-format-chat"></span>
                                <h3>No conversations found</h3>
                                <p>Try adjusting your filters or check back later.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </main>
        </div>
    </div>
    
    <script>
    function ptp_updateFilter(param, value) {
        const url = new URL(window.location.href);
        url.searchParams.set(param, value);
        window.location.href = url.toString();
    }
    
    function ptp_updateConversationStatus(convId, status) {
        if (!status) return;
        
        jQuery.post(ajaxurl, {
            action: 'ptp_update_conversation_status',
            conversation_id: convId,
            status: status,
            nonce: ptpCommHub.nonce
        }, function(response) {
            if (response.success) {
                location.reload();
            }
        });
    }
    
    function ptp_assignConversation(convId, userId) {
        if (!userId) return;
        
        jQuery.post(ajaxurl, {
            action: 'ptp_assign_conversation',
            conversation_id: convId,
            user_id: userId,
            nonce: ptpCommHub.nonce
        }, function(response) {
            if (response.success) {
                location.reload();
            }
        });
    }
    
    function ptp_insertTemplate(templateId) {
        if (!templateId) return;
        
        const option = jQuery('.ptp-template-select option[value="' + templateId + '"]');
        const content = option.data('content');
        
        if (content) {
            jQuery('#ptp-message-content').val(content);
            ptp_updateCharCount();
        }
    }
    
    function ptp_updateCharCount() {
        const content = jQuery('#ptp-message-content').val();
        const length = content.length;
        const segments = Math.ceil(length / 160) || 0;
        
        jQuery('#ptp-char-count').text(length);
        jQuery('#ptp-sms-segments').text(segments);
    }
    
    function ptp_searchConversations(query) {
        const items = jQuery('.ptp-conversation-item');
        const lowerQuery = query.toLowerCase();
        
        items.each(function() {
            const text = jQuery(this).text().toLowerCase();
            if (text.includes(lowerQuery)) {
                jQuery(this).show();
            } else {
                jQuery(this).hide();
            }
        });
    }
    
    jQuery(document).ready(function($) {
        $('#ptp-message-content').on('input', ptp_updateCharCount);
        ptp_updateCharCount();
    });
    </script>
    <?php
}

// AJAX handlers
add_action('wp_ajax_ptp_update_conversation_status', 'ptp_commhub_ajax_update_status');
function ptp_commhub_ajax_update_status() {
    check_ajax_referer('ptp_commhub_nonce', 'nonce');
    
    if (!current_user_can('view_ptp_conversations')) {
        wp_send_json_error('Unauthorized');
    }
    
    global $wpdb;
    
    $conv_id = intval($_POST['conversation_id']);
    $status = sanitize_text_field($_POST['status']);
    
    $wpdb->update(
        $wpdb->prefix . 'ptp_conversations',
        array('status' => $status),
        array('id' => $conv_id),
        array('%s'),
        array('%d')
    );
    
    ptp_commhub_log_audit('update_conversation_status', 'conversation', $conv_id, array('status' => $status));
    
    wp_send_json_success();
}

add_action('wp_ajax_ptp_assign_conversation', 'ptp_commhub_ajax_assign_conversation');
function ptp_commhub_ajax_assign_conversation() {
    check_ajax_referer('ptp_commhub_nonce', 'nonce');
    
    if (!current_user_can('view_ptp_conversations')) {
        wp_send_json_error('Unauthorized');
    }
    
    global $wpdb;
    
    $conv_id = intval($_POST['conversation_id']);
    $user_id = intval($_POST['user_id']);
    
    $wpdb->update(
        $wpdb->prefix . 'ptp_conversations',
        array('owner_user_id' => $user_id),
        array('id' => $conv_id),
        array('%d'),
        array('%d')
    );
    
    ptp_commhub_log_audit('assign_conversation', 'conversation', $conv_id, array('user_id' => $user_id));
    
    wp_send_json_success();
}

/**
 * Helper: Get User Markets
 */
function ptp_commhub_get_user_markets($user_id) {
    global $wpdb;
    
    return $wpdb->get_col($wpdb->prepare(
        "SELECT market FROM {$wpdb->prefix}ptp_user_markets WHERE user_id = %d",
        $user_id
    ));
}

/**
 * Helper: Send Message
 */
function ptp_commhub_send_message($conversation_id, $content, $channel = 'sms') {
    global $wpdb;
    
    $conversation = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}ptp_conversations WHERE id = %d",
        $conversation_id
    ));
    
    if (!$conversation) {
        return false;
    }
    
    // Parse merge tags
    $content = ptp_commhub_parse_merge_tags($content, $conversation->parent_id);
    
    // Queue enabled?
    if (get_option('ptp_comm_queue_enabled') === '1') {
        // Add to queue
        $wpdb->insert(
            $wpdb->prefix . 'ptp_message_queue',
            array(
                'parent_id' => $conversation->parent_id,
                'channel' => $channel,
                'content' => $content,
                'priority' => 1,
                'scheduled_for' => current_time('mysql')
            ),
            array('%d', '%s', '%s', '%d', '%s')
        );
    } else {
        // Send immediately
        ptp_commhub_send_sms_immediate($conversation->parent_id, $content, $conversation_id);
    }
    
    return true;
}

/**
 * Helper: Log Audit Event
 */
function ptp_commhub_log_audit($action, $entity_type = null, $entity_id = null, $payload = array()) {
    global $wpdb;
    
    $wpdb->insert(
        $wpdb->prefix . 'ptp_audit_log',
        array(
            'user_id' => get_current_user_id(),
            'action' => $action,
            'entity_type' => $entity_type,
            'entity_id' => $entity_id,
            'payload' => json_encode($payload),
            'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? ''
        ),
        array('%d', '%s', '%s', '%d', '%s', '%s', '%s')
    );
}

/**
 * PTP Communication Hub v5.0 - Part 3
 * Campaign Builder, Analytics, and Templates
 */

/**
 * ============================================================================
 * CAMPAIGN BUILDER PAGE
 * ============================================================================
 */
function ptp_commhub_render_campaigns() {
    global $wpdb;
    
    $action = isset($_GET['action']) ? sanitize_text_field($_GET['action']) : 'list';
    
    if ($action === 'new' || ($action === 'edit' && isset($_GET['campaign_id']))) {
        ptp_commhub_render_campaign_builder();
        return;
    }
    
    // Get campaigns
    $campaigns = $wpdb->get_results("
        SELECT 
            c.*,
            u.display_name as created_by_name
        FROM {$wpdb->prefix}ptp_campaigns c
        LEFT JOIN {$wpdb->users} u ON c.created_by = u.ID
        ORDER BY c.created_at DESC
    ");
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <div class="ptp-commhub-title">
                    <span class="dashicons dashicons-megaphone" style="color: var(--ptp-yellow); margin-right: 8px;"></span>
                    Campaign Management
                </div>
                <p class="description">Create and manage broadcast campaigns</p>
            </div>
            <a href="<?php echo admin_url('admin.php?page=ptp-commhub-campaigns&action=new'); ?>" class="ptp-pill-button ptp-pill-button--primary">
                <span class="dashicons dashicons-plus"></span>
                New Campaign
            </a>
        </header>
        
        <div class="ptp-commhub-card">
            <?php if (!empty($campaigns)): ?>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th>Campaign Name</th>
                            <th>Segment</th>
                            <th>Status</th>
                            <th>Recipients</th>
                            <th>Sent / Delivered</th>
                            <th>Response Rate</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($campaigns as $campaign): ?>
                            <tr>
                                <td>
                                    <strong><?php echo esc_html($campaign->name); ?></strong>
                                    <div class="row-actions">
                                        <span>by <?php echo esc_html($campaign->created_by_name ?: 'System'); ?></span>
                                    </div>
                                </td>
                                <td><?php echo esc_html($campaign->segment ?: 'Custom'); ?></td>
                                <td>
                                    <span class="ptp-status-badge ptp-status-<?php echo esc_attr($campaign->status); ?>">
                                        <?php echo esc_html(ucfirst($campaign->status)); ?>
                                    </span>
                                </td>
                                <td><?php echo esc_html(number_format($campaign->total_recipients)); ?></td>
                                <td>
                                    <?php echo esc_html(number_format($campaign->sent_count)); ?> / 
                                    <?php echo esc_html(number_format($campaign->delivered_count)); ?>
                                </td>
                                <td>
                                    <?php 
                                    $response_rate = $campaign->sent_count > 0 
                                        ? round(($campaign->replied_count / $campaign->sent_count) * 100, 1) 
                                        : 0;
                                    echo esc_html($response_rate) . '%';
                                    ?>
                                </td>
                                <td><?php echo esc_html(date('M j, Y', strtotime($campaign->created_at))); ?></td>
                                <td>
                                    <?php if ($campaign->status === 'draft'): ?>
                                        <button class="button button-small" onclick="ptp_launchCampaign(<?php echo $campaign->id; ?>)">
                                            Launch
                                        </button>
                                    <?php elseif ($campaign->status === 'active'): ?>
                                        <button class="button button-small" onclick="ptp_pauseCampaign(<?php echo $campaign->id; ?>)">
                                            Pause
                                        </button>
                                    <?php endif; ?>
                                    
                                    <a href="<?php echo admin_url('admin.php?page=ptp-commhub-campaigns&action=view&campaign_id=' . $campaign->id); ?>" class="button button-small">
                                        View
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="ptp-inbox-empty">
                    <span class="dashicons dashicons-megaphone"></span>
                    <h3>No campaigns yet</h3>
                    <p>Create your first campaign to start sending bulk messages</p>
                    <a href="<?php echo admin_url('admin.php?page=ptp-commhub-campaigns&action=new'); ?>" class="ptp-pill-button ptp-pill-button--primary" style="margin-top: 16px;">
                        <span class="dashicons dashicons-plus"></span>
                        Create Campaign
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

/**
 * Campaign Builder Wizard
 */
function ptp_commhub_render_campaign_builder() {
    global $wpdb;
    
    $step = isset($_GET['step']) ? intval($_GET['step']) : 1;
    
    // Get segments data
    $segments = array(
        'all_active' => 'All Active Parents',
        'winter_2024' => 'Winter 2024 Registrants',
        'summer_2024' => 'Summer 2024 Registrants',
        'steelyard' => 'Steelyard Market',
        'westfield' => 'Westfield Market',
        'carmel' => 'Carmel Market',
        'no_shows' => 'Clinic No-Shows',
        'vip' => 'VIP Parents'
    );
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <a href="<?php echo admin_url('admin.php?page=ptp-commhub-campaigns'); ?>" class="ptp-back-button">
                    <span class="dashicons dashicons-arrow-left-alt2"></span> Back to Campaigns
                </a>
                <div class="ptp-commhub-title">New Campaign</div>
            </div>
        </header>
        
        <!-- Campaign Wizard Steps -->
        <div class="ptp-wizard-steps">
            <div class="ptp-wizard-step <?php echo $step === 1 ? 'ptp-wizard-step--active' : ($step > 1 ? 'ptp-wizard-step--complete' : ''); ?>">
                <div class="ptp-wizard-step-number">1</div>
                <div class="ptp-wizard-step-label">Audience</div>
            </div>
            
            <div class="ptp-wizard-step <?php echo $step === 2 ? 'ptp-wizard-step--active' : ($step > 2 ? 'ptp-wizard-step--complete' : ''); ?>">
                <div class="ptp-wizard-step-number">2</div>
                <div class="ptp-wizard-step-label">Message</div>
            </div>
            
            <div class="ptp-wizard-step <?php echo $step === 3 ? 'ptp-wizard-step--active' : ($step > 3 ? 'ptp-wizard-step--complete' : ''); ?>">
                <div class="ptp-wizard-step-number">3</div>
                <div class="ptp-wizard-step-label">Schedule</div>
            </div>
            
            <div class="ptp-wizard-step <?php echo $step === 4 ? 'ptp-wizard-step--active' : ''; ?>">
                <div class="ptp-wizard-step-number">4</div>
                <div class="ptp-wizard-step-label">Review</div>
            </div>
        </div>
        
        <div class="ptp-commhub-card" style="margin-top: 24px;">
            <?php if ($step === 1): ?>
                <!-- Step 1: Audience Selection -->
                <h2>Select Your Audience</h2>
                <p class="description">Choose who will receive this campaign</p>
                
                <form method="get" style="margin-top: 24px;">
                    <input type="hidden" name="page" value="ptp-commhub-campaigns">
                    <input type="hidden" name="action" value="new">
                    <input type="hidden" name="step" value="2">
                    
                    <div class="ptp-segment-grid">
                        <?php foreach ($segments as $key => $label): ?>
                            <?php
                            $count = $wpdb->get_var("
                                SELECT COUNT(*) FROM {$wpdb->prefix}ptp_parents 
                                WHERE opted_out = 0 AND consent_status = 'opt_in'
                            ");
                            ?>
                            
                            <label class="ptp-segment-card">
                                <input type="radio" name="segment" value="<?php echo esc_attr($key); ?>" required>
                                <div class="ptp-segment-card-content">
                                    <div class="ptp-segment-name"><?php echo esc_html($label); ?></div>
                                    <div class="ptp-segment-count"><?php echo esc_html(number_format($count)); ?> contacts</div>
                                </div>
                            </label>
                        <?php endforeach; ?>
                    </div>
                    
                    <div style="margin-top: 24px; display: flex; justify-content: space-between;">
                        <a href="<?php echo admin_url('admin.php?page=ptp-commhub-campaigns'); ?>" class="ptp-pill-button">
                            Cancel
                        </a>
                        <button type="submit" class="ptp-pill-button ptp-pill-button--primary">
                            Continue to Message
                            <span class="dashicons dashicons-arrow-right-alt2"></span>
                        </button>
                    </div>
                </form>
                
            <?php elseif ($step === 2): ?>
                <!-- Step 2: Message Composition -->
                <h2>Create Your Message</h2>
                <p class="description">Craft the perfect message for your audience</p>
                
                <form method="get" style="margin-top: 24px;">
                    <input type="hidden" name="page" value="ptp-commhub-campaigns">
                    <input type="hidden" name="action" value="new">
                    <input type="hidden" name="step" value="3">
                    <input type="hidden" name="segment" value="<?php echo esc_attr($_GET['segment'] ?? ''); ?>">
                    
                    <div class="ptp-form-group">
                        <label for="campaign_name">Campaign Name</label>
                        <input type="text" id="campaign_name" name="campaign_name" class="regular-text" placeholder="e.g., Winter Registration Reminder" required>
                    </div>
                    
                    <div class="ptp-form-group">
                        <label for="message_content">Message</label>
                        <textarea id="message_content" name="message_content" rows="6" class="large-text" placeholder="Type your message..." required></textarea>
                        <div class="ptp-char-counter" style="margin-top: 8px;">
                            <span id="char-count">0</span> characters • <span id="sms-segments">0</span> SMS segments
                        </div>
                    </div>
                    
                    <div class="ptp-merge-tags-help">
                        <strong>Available merge tags:</strong>
                        <code>{{first_name}}</code>
                        <code>{{last_name}}</code>
                        <code>{{child_name}}</code>
                        <code>{{event_type}}</code>
                        <code>{{market}}</code>
                    </div>
                    
                    <div style="margin-top: 24px; display: flex; justify-content: space-between;">
                        <a href="?page=ptp-commhub-campaigns&action=new&step=1" class="ptp-pill-button">
                            <span class="dashicons dashicons-arrow-left-alt2"></span>
                            Back
                        </a>
                        <button type="submit" class="ptp-pill-button ptp-pill-button--primary">
                            Continue to Schedule
                            <span class="dashicons dashicons-arrow-right-alt2"></span>
                        </button>
                    </div>
                </form>
                
            <?php elseif ($step === 3): ?>
                <!-- Step 3: Schedule -->
                <h2>Schedule Your Campaign</h2>
                <p class="description">Choose when to send this campaign</p>
                
                <form method="post" style="margin-top: 24px;">
                    <?php wp_nonce_field('create_campaign'); ?>
                    <input type="hidden" name="action" value="create_campaign">
                    <input type="hidden" name="segment" value="<?php echo esc_attr($_GET['segment'] ?? ''); ?>">
                    <input type="hidden" name="campaign_name" value="<?php echo esc_attr($_GET['campaign_name'] ?? ''); ?>">
                    <input type="hidden" name="message_content" value="<?php echo esc_attr($_GET['message_content'] ?? ''); ?>">
                    
                    <div class="ptp-schedule-options">
                        <label class="ptp-schedule-card">
                            <input type="radio" name="schedule_type" value="immediate" checked>
                            <div class="ptp-schedule-card-content">
                                <span class="dashicons dashicons-backup"></span>
                                <div>
                                    <strong>Send Immediately</strong>
                                    <p>Campaign will start sending right away</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="ptp-schedule-card">
                            <input type="radio" name="schedule_type" value="scheduled">
                            <div class="ptp-schedule-card-content">
                                <span class="dashicons dashicons-calendar-alt"></span>
                                <div>
                                    <strong>Schedule for Later</strong>
                                    <p>Choose a specific date and time</p>
                                </div>
                            </div>
                        </label>
                    </div>
                    
                    <div id="schedule_datetime" style="display: none; margin-top: 16px;">
                        <label for="scheduled_date">Send Date & Time</label>
                        <input type="datetime-local" id="scheduled_date" name="scheduled_date" class="regular-text">
                    </div>
                    
                    <div class="ptp-quiet-hours-warning" style="margin-top: 24px; padding: 12px; background: rgba(245, 158, 11, 0.1); border-radius: 8px;">
                        <strong>⚠️ Quiet Hours Enforcement</strong>
                        <p>Messages will not be sent during quiet hours (9 PM - 8 AM). Scheduled messages will queue and send when quiet hours end.</p>
                    </div>
                    
                    <div style="margin-top: 24px; display: flex; justify-content: space-between;">
                        <a href="?page=ptp-commhub-campaigns&action=new&step=2&segment=<?php echo esc_attr($_GET['segment'] ?? ''); ?>" class="ptp-pill-button">
                            <span class="dashicons dashicons-arrow-left-alt2"></span>
                            Back
                        </a>
                        <button type="submit" class="ptp-pill-button ptp-pill-button--primary">
                            Review & Launch
                            <span class="dashicons dashicons-arrow-right-alt2"></span>
                        </button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        // Toggle schedule datetime
        $('input[name="schedule_type"]').change(function() {
            if ($(this).val() === 'scheduled') {
                $('#schedule_datetime').show();
            } else {
                $('#schedule_datetime').hide();
            }
        });
        
        // Character counter
        $('#message_content').on('input', function() {
            const length = $(this).val().length;
            const segments = Math.ceil(length / 160) || 0;
            $('#char-count').text(length);
            $('#sms-segments').text(segments);
        });
    });
    </script>
    
    <style>
    .ptp-wizard-steps {
        display: flex;
        justify-content: space-between;
        max-width: 600px;
        margin: 24px auto 0;
        position: relative;
    }
    
    .ptp-wizard-steps::before {
        content: '';
        position: absolute;
        top: 20px;
        left: 40px;
        right: 40px;
        height: 2px;
        background: var(--ptp-border);
        z-index: 0;
    }
    
    .ptp-wizard-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        position: relative;
        z-index: 1;
    }
    
    .ptp-wizard-step-number {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: 2px solid var(--ptp-border);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: var(--ptp-muted);
        transition: var(--ptp-transition);
    }
    
    .ptp-wizard-step--active .ptp-wizard-step-number {
        border-color: var(--ptp-yellow);
        background: var(--ptp-yellow);
        color: var(--ptp-ink);
    }
    
    .ptp-wizard-step--complete .ptp-wizard-step-number {
        border-color: #10b981;
        background: #10b981;
        color: white;
    }
    
    .ptp-wizard-step-label {
        font-size: 12px;
        font-weight: 500;
        color: var(--ptp-muted);
    }
    
    .ptp-wizard-step--active .ptp-wizard-step-label {
        color: var(--ptp-ink);
        font-weight: 600;
    }
    
    .ptp-segment-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 16px;
        margin-top: 20px;
    }
    
    .ptp-segment-card {
        position: relative;
        cursor: pointer;
    }
    
    .ptp-segment-card input[type="radio"] {
        position: absolute;
        opacity: 0;
    }
    
    .ptp-segment-card-content {
        padding: 20px;
        border: 2px solid var(--ptp-border);
        border-radius: 12px;
        background: white;
        transition: var(--ptp-transition);
    }
    
    .ptp-segment-card:hover .ptp-segment-card-content {
        border-color: var(--ptp-yellow);
    }
    
    .ptp-segment-card input[type="radio"]:checked + .ptp-segment-card-content {
        border-color: var(--ptp-yellow);
        background: var(--ptp-yellow-light);
    }
    
    .ptp-segment-name {
        font-size: 14px;
        font-weight: 600;
        color: var(--ptp-ink);
        margin-bottom: 4px;
    }
    
    .ptp-segment-count {
        font-size: 12px;
        color: var(--ptp-muted);
    }
    
    .ptp-form-group {
        margin-bottom: 20px;
    }
    
    .ptp-form-group label {
        display: block;
        font-weight: 500;
        margin-bottom: 8px;
        color: var(--ptp-ink);
    }
    
    .ptp-merge-tags-help {
        background: var(--ptp-bg);
        padding: 12px 16px;
        border-radius: 8px;
        margin-top: 16px;
    }
    
    .ptp-merge-tags-help code {
        display: inline-block;
        padding: 4px 8px;
        background: white;
        border: 1px solid var(--ptp-border);
        border-radius: 4px;
        font-size: 11px;
        margin: 4px 4px 0 0;
    }
    
    .ptp-schedule-options {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }
    
    .ptp-schedule-card {
        cursor: pointer;
    }
    
    .ptp-schedule-card input[type="radio"] {
        position: absolute;
        opacity: 0;
    }
    
    .ptp-schedule-card-content {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 16px;
        border: 2px solid var(--ptp-border);
        border-radius: 12px;
        background: white;
        transition: var(--ptp-transition);
    }
    
    .ptp-schedule-card-content .dashicons {
        font-size: 32px;
        width: 32px;
        height: 32px;
        color: var(--ptp-yellow);
    }
    
    .ptp-schedule-card:hover .ptp-schedule-card-content {
        border-color: var(--ptp-yellow);
    }
    
    .ptp-schedule-card input[type="radio"]:checked + .ptp-schedule-card-content {
        border-color: var(--ptp-yellow);
        background: var(--ptp-yellow-light);
    }
    
    .ptp-schedule-card-content strong {
        display: block;
        margin-bottom: 4px;
    }
    
    .ptp-schedule-card-content p {
        margin: 0;
        font-size: 13px;
        color: var(--ptp-muted);
    }
    </style>
    <?php
}

/**
 * ============================================================================
 * ANALYTICS DASHBOARD
 * ============================================================================
 */
function ptp_commhub_render_analytics() {
    global $wpdb;
    
    // Get date range
    $range = isset($_GET['range']) ? sanitize_text_field($_GET['range']) : '30';
    $start_date = date('Y-m-d', strtotime("-{$range} days"));
    
    // Get stats
    $stats = array(
        'messages_sent' => $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_messages 
            WHERE direction = 'outbound' AND created_at >= %s
        ", $start_date)),
        
        'messages_received' => $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_messages 
            WHERE direction = 'inbound' AND created_at >= %s
        ", $start_date)),
        
        'conversations_new' => $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_conversations 
            WHERE created_at >= %s
        ", $start_date)),
        
        'optouts' => $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_compliance_log 
            WHERE event_type = 'opt_out' AND created_at >= %s
        ", $start_date))
    );
    
    // Calculate response rate
    $response_rate = $stats['messages_sent'] > 0 
        ? round(($stats['messages_received'] / $stats['messages_sent']) * 100, 1) 
        : 0;
    
    // Get messages by day
    $messages_by_day = $wpdb->get_results($wpdb->prepare("
        SELECT 
            DATE(created_at) as date,
            SUM(CASE WHEN direction = 'outbound' THEN 1 ELSE 0 END) as sent,
            SUM(CASE WHEN direction = 'inbound' THEN 1 ELSE 0 END) as received
        FROM {$wpdb->prefix}ptp_messages
        WHERE created_at >= %s
        GROUP BY DATE(created_at)
        ORDER BY date ASC
    ", $start_date));
    
    // Get top templates
    $top_templates = $wpdb->get_results("
        SELECT name, usage_count 
        FROM {$wpdb->prefix}ptp_templates 
        WHERE usage_count > 0
        ORDER BY usage_count DESC
        LIMIT 5
    ");
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <div class="ptp-commhub-title">
                    <span class="dashicons dashicons-chart-bar" style="color: var(--ptp-yellow); margin-right: 8px;"></span>
                    Analytics Dashboard
                </div>
                <p class="description">Performance metrics and insights</p>
            </div>
            
            <select class="ptp-filter-select" style="width: auto;" onchange="location.href='?page=ptp-commhub-analytics&range='+this.value">
                <option value="7" <?php selected($range, '7'); ?>>Last 7 Days</option>
                <option value="30" <?php selected($range, '30'); ?>>Last 30 Days</option>
                <option value="90" <?php selected($range, '90'); ?>>Last 90 Days</option>
            </select>
        </header>
        
        <!-- Stats Grid -->
        <div class="ptp-stats-grid">
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Messages Sent</div>
                <div class="ptp-stat-value"><?php echo esc_html(number_format($stats['messages_sent'])); ?></div>
                <div class="ptp-stat-change ptp-stat-change--positive">
                    ↑ Last <?php echo esc_html($range); ?> days
                </div>
            </div>
            
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Messages Received</div>
                <div class="ptp-stat-value"><?php echo esc_html(number_format($stats['messages_received'])); ?></div>
                <div class="ptp-stat-change ptp-stat-change--positive">
                    ↑ Last <?php echo esc_html($range); ?> days
                </div>
            </div>
            
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Response Rate</div>
                <div class="ptp-stat-value"><?php echo esc_html($response_rate); ?>%</div>
                <div class="ptp-stat-change">
                    Based on <?php echo esc_html($range); ?>-day average
                </div>
            </div>
            
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">New Conversations</div>
                <div class="ptp-stat-value"><?php echo esc_html(number_format($stats['conversations_new'])); ?></div>
                <div class="ptp-stat-change ptp-stat-change--positive">
                    ↑ Last <?php echo esc_html($range); ?> days
                </div>
            </div>
            
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Opt-Outs</div>
                <div class="ptp-stat-value"><?php echo esc_html(number_format($stats['optouts'])); ?></div>
                <div class="ptp-stat-change <?php echo $stats['optouts'] > 0 ? 'ptp-stat-change--negative' : ''; ?>">
                    Last <?php echo esc_html($range); ?> days
                </div>
            </div>
        </div>
        
        <!-- Charts -->
        <div class="ptp-commhub-grid" style="margin-top: 24px;">
            <div class="ptp-commhub-card" style="grid-column: span 2;">
                <div class="ptp-commhub-card-title">Message Volume</div>
                <canvas id="messageVolumeChart" height="80"></canvas>
            </div>
        </div>
        
        <div class="ptp-commhub-grid" style="margin-top: 20px;">
            <div class="ptp-commhub-card">
                <div class="ptp-commhub-card-title">Top Templates</div>
                <?php if (!empty($top_templates)): ?>
                    <div class="ptp-template-stats">
                        <?php foreach ($top_templates as $tpl): ?>
                            <div class="ptp-template-stat-row">
                                <span class="ptp-template-name"><?php echo esc_html($tpl->name); ?></span>
                                <span class="ptp-template-count"><?php echo esc_html(number_format($tpl->usage_count)); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p style="color: var(--ptp-muted); font-size: 13px;">No template usage data yet</p>
                <?php endif; ?>
            </div>
            
            <div class="ptp-commhub-card">
                <div class="ptp-commhub-card-title">Quick Actions</div>
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 12px;">
                    <a href="<?php echo admin_url('admin.php?page=ptp-commhub-campaigns&action=new'); ?>" class="ptp-pill-button">
                        <span class="dashicons dashicons-megaphone"></span>
                        New Campaign
                    </a>
                    <a href="<?php echo admin_url('admin.php?page=ptp-communication-hub'); ?>" class="ptp-pill-button">
                        <span class="dashicons dashicons-email"></span>
                        View Inbox
                    </a>
                    <button onclick="ptp_exportAnalytics()" class="ptp-pill-button">
                        <span class="dashicons dashicons-download"></span>
                        Export CSV
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        const ctx = document.getElementById('messageVolumeChart');
        
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode(array_column($messages_by_day, 'date')); ?>,
                datasets: [
                    {
                        label: 'Sent',
                        data: <?php echo json_encode(array_column($messages_by_day, 'sent')); ?>,
                        borderColor: '#FCB900',
                        backgroundColor: 'rgba(252, 185, 0, 0.1)',
                        tension: 0.4
                    },
                    {
                        label: 'Received',
                        data: <?php echo json_encode(array_column($messages_by_day, 'received')); ?>,
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
    
    function ptp_exportAnalytics() {
        window.location.href = ajaxurl + '?action=ptp_export_analytics&nonce=' + ptpCommHub.nonce;
    }
    </script>
    
    <style>
    .ptp-template-stats {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-top: 12px;
    }
    
    .ptp-template-stat-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background: var(--ptp-bg);
        border-radius: 8px;
    }
    
    .ptp-template-name {
        font-size: 13px;
        color: var(--ptp-ink);
    }
    
    .ptp-template-count {
        font-weight: 600;
        color: var(--ptp-yellow);
    }
    </style>
    <?php
}

/**
 * PTP Communication Hub v5.0 - Part 4
 * Templates Manager, Contacts CRM, Settings, and Audit Log
 */

/**
 * ============================================================================
 * TEMPLATES MANAGER
 * ============================================================================
 */
function ptp_commhub_render_templates() {
    global $wpdb;
    
    // Handle actions
    if (isset($_POST['save_template']) && wp_verify_nonce($_POST['_wpnonce'], 'save_template')) {
        $template_id = isset($_POST['template_id']) ? intval($_POST['template_id']) : 0;
        
        $data = array(
            'name' => sanitize_text_field($_POST['template_name']),
            'category' => sanitize_text_field($_POST['template_category']),
            'content' => sanitize_textarea_field($_POST['template_content']),
            'shortcode' => sanitize_text_field($_POST['template_shortcode']),
            'channel' => sanitize_text_field($_POST['template_channel']),
            'is_active' => isset($_POST['is_active']) ? 1 : 0
        );
        
        if ($template_id > 0) {
            $wpdb->update(
                $wpdb->prefix . 'ptp_templates',
                $data,
                array('id' => $template_id),
                array('%s', '%s', '%s', '%s', '%s', '%d'),
                array('%d')
            );
            $message = 'Template updated successfully!';
        } else {
            $data['created_by'] = get_current_user_id();
            $wpdb->insert(
                $wpdb->prefix . 'ptp_templates',
                $data,
                array('%s', '%s', '%s', '%s', '%s', '%d', '%d')
            );
            $message = 'Template created successfully!';
        }
        
        ptp_commhub_log_audit('save_template', 'template', $template_id ?: $wpdb->insert_id, $data);
        
        echo '<div class="notice notice-success"><p>' . esc_html($message) . '</p></div>';
    }
    
    if (isset($_GET['delete_template'])) {
        $template_id = intval($_GET['delete_template']);
        $wpdb->delete($wpdb->prefix . 'ptp_templates', array('id' => $template_id), array('%d'));
        ptp_commhub_log_audit('delete_template', 'template', $template_id);
        echo '<div class="notice notice-success"><p>Template deleted.</p></div>';
    }
    
    // Get templates
    $templates = $wpdb->get_results("
        SELECT t.*, u.display_name as created_by_name
        FROM {$wpdb->prefix}ptp_templates t
        LEFT JOIN {$wpdb->users} u ON t.created_by = u.ID
        ORDER BY t.category, t.name
    ");
    
    // Editing?
    $editing_template = null;
    if (isset($_GET['edit'])) {
        $editing_template = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_templates WHERE id = %d",
            intval($_GET['edit'])
        ));
    }
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <div class="ptp-commhub-title">
                    <span class="dashicons dashicons-format-aside" style="color: var(--ptp-yellow); margin-right: 8px;"></span>
                    Saved Reply Templates
                </div>
                <p class="description">Create reusable message templates with merge tags</p>
            </div>
            <button onclick="ptp_showTemplateForm()" class="ptp-pill-button ptp-pill-button--primary">
                <span class="dashicons dashicons-plus"></span>
                New Template
            </button>
        </header>
        
        <div class="ptp-commhub-grid">
            <!-- Template Form (Initially Hidden) -->
            <div class="ptp-commhub-card" id="template-form" style="grid-column: span 2; <?php echo $editing_template ? '' : 'display: none;'; ?>">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <h2><?php echo $editing_template ? 'Edit Template' : 'New Template'; ?></h2>
                    <button onclick="ptp_hideTemplateForm()" class="ptp-pill-button">
                        <span class="dashicons dashicons-no"></span>
                        Cancel
                    </button>
                </div>
                
                <form method="post">
                    <?php wp_nonce_field('save_template'); ?>
                    <?php if ($editing_template): ?>
                        <input type="hidden" name="template_id" value="<?php echo esc_attr($editing_template->id); ?>">
                    <?php endif; ?>
                    
                    <div class="ptp-form-grid">
                        <div class="ptp-form-group">
                            <label for="template_name">Template Name *</label>
                            <input type="text" id="template_name" name="template_name" class="regular-text" 
                                   value="<?php echo esc_attr($editing_template->name ?? ''); ?>" required>
                        </div>
                        
                        <div class="ptp-form-group">
                            <label for="template_shortcode">Shortcode</label>
                            <input type="text" id="template_shortcode" name="template_shortcode" class="regular-text" 
                                   value="<?php echo esc_attr($editing_template->shortcode ?? ''); ?>" placeholder="/shortcode">
                            <p class="description">Optional quick-access code (e.g., /weather)</p>
                        </div>
                        
                        <div class="ptp-form-group">
                            <label for="template_category">Category *</label>
                            <select id="template_category" name="template_category" class="regular-text" required>
                                <option value="">Select Category</option>
                                <option value="Confirmation" <?php selected($editing_template->category ?? '', 'Confirmation'); ?>>Confirmation</option>
                                <option value="Reminder" <?php selected($editing_template->category ?? '', 'Reminder'); ?>>Reminder</option>
                                <option value="Weather" <?php selected($editing_template->category ?? '', 'Weather'); ?>>Weather</option>
                                <option value="Support" <?php selected($editing_template->category ?? '', 'Support'); ?>>Support</option>
                                <option value="Marketing" <?php selected($editing_template->category ?? '', 'Marketing'); ?>>Marketing</option>
                                <option value="Other" <?php selected($editing_template->category ?? '', 'Other'); ?>>Other</option>
                            </select>
                        </div>
                        
                        <div class="ptp-form-group">
                            <label for="template_channel">Channel *</label>
                            <select id="template_channel" name="template_channel" class="regular-text" required>
                                <option value="sms" <?php selected($editing_template->channel ?? 'sms', 'sms'); ?>>SMS</option>
                                <option value="email" <?php selected($editing_template->channel ?? '', 'email'); ?>>Email</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="ptp-form-group" style="margin-top: 16px;">
                        <label for="template_content">Message Content *</label>
                        <textarea id="template_content" name="template_content" rows="6" class="large-text" required><?php echo esc_textarea($editing_template->content ?? ''); ?></textarea>
                        <div class="ptp-char-counter" style="margin-top: 8px;">
                            <span id="template-char-count">0</span> characters • <span id="template-sms-segments">0</span> SMS segments
                        </div>
                    </div>
                    
                    <div class="ptp-merge-tags-help">
                        <strong>Available merge tags:</strong>
                        <code>{{first_name}}</code>
                        <code>{{last_name}}</code>
                        <code>{{child_name}}</code>
                        <code>{{event_type}}</code>
                        <code>{{event_date}}</code>
                        <code>{{venue}}</code>
                        <code>{{market}}</code>
                        <code>{{camp_url}}</code>
                    </div>
                    
                    <div class="ptp-form-group" style="margin-top: 16px;">
                        <label>
                            <input type="checkbox" name="is_active" <?php checked($editing_template->is_active ?? 1, 1); ?>>
                            Active (available for use)
                        </label>
                    </div>
                    
                    <div style="margin-top: 24px;">
                        <button type="submit" name="save_template" class="ptp-pill-button ptp-pill-button--primary">
                            <span class="dashicons dashicons-saved"></span>
                            Save Template
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Templates List -->
            <div class="ptp-commhub-card" style="grid-column: span 2;">
                <?php if (!empty($templates)): ?>
                    <?php
                    $grouped = array();
                    foreach ($templates as $tpl) {
                        $grouped[$tpl->category][] = $tpl;
                    }
                    ?>
                    
                    <?php foreach ($grouped as $category => $category_templates): ?>
                        <div class="ptp-template-category">
                            <h3 class="ptp-template-category-title"><?php echo esc_html($category); ?></h3>
                            
                            <?php foreach ($category_templates as $tpl): ?>
                                <div class="ptp-template-item <?php echo $tpl->is_active ? '' : 'ptp-template-inactive'; ?>">
                                    <div class="ptp-template-header">
                                        <div>
                                            <strong><?php echo esc_html($tpl->name); ?></strong>
                                            <?php if ($tpl->shortcode): ?>
                                                <code class="ptp-template-shortcode"><?php echo esc_html($tpl->shortcode); ?></code>
                                            <?php endif; ?>
                                            <?php if (!$tpl->is_active): ?>
                                                <span class="ptp-template-badge ptp-template-badge--inactive">Inactive</span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <div class="ptp-template-stats">
                                            <span class="ptp-template-usage">
                                                <span class="dashicons dashicons-chart-line"></span>
                                                <?php echo esc_html(number_format($tpl->usage_count)); ?> uses
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="ptp-template-content">
                                        <?php echo nl2br(esc_html($tpl->content)); ?>
                                    </div>
                                    
                                    <div class="ptp-template-footer">
                                        <span class="ptp-template-meta">
                                            Created by <?php echo esc_html($tpl->created_by_name ?: 'System'); ?> on 
                                            <?php echo esc_html(date('M j, Y', strtotime($tpl->created_at))); ?>
                                        </span>
                                        
                                        <div class="ptp-template-actions">
                                            <a href="?page=ptp-commhub-templates&edit=<?php echo esc_attr($tpl->id); ?>" class="ptp-pill-button ptp-pill-button--small">
                                                <span class="dashicons dashicons-edit"></span>
                                                Edit
                                            </a>
                                            <button onclick="ptp_duplicateTemplate(<?php echo esc_attr($tpl->id); ?>)" class="ptp-pill-button ptp-pill-button--small">
                                                <span class="dashicons dashicons-admin-page"></span>
                                                Duplicate
                                            </button>
                                            <a href="?page=ptp-commhub-templates&delete_template=<?php echo esc_attr($tpl->id); ?>" 
                                               onclick="return confirm('Delete this template?')" 
                                               class="ptp-pill-button ptp-pill-button--small ptp-pill-button--danger">
                                                <span class="dashicons dashicons-trash"></span>
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                    
                <?php else: ?>
                    <div class="ptp-inbox-empty">
                        <span class="dashicons dashicons-format-aside"></span>
                        <h3>No templates yet</h3>
                        <p>Create your first template to speed up common replies</p>
                        <button onclick="ptp_showTemplateForm()" class="ptp-pill-button ptp-pill-button--primary" style="margin-top: 16px;">
                            <span class="dashicons dashicons-plus"></span>
                            Create Template
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <script>
    function ptp_showTemplateForm() {
        jQuery('#template-form').slideDown();
        jQuery('#template_name').focus();
    }
    
    function ptp_hideTemplateForm() {
        jQuery('#template-form').slideUp();
        jQuery('#template-form form')[0].reset();
    }
    
    function ptp_duplicateTemplate(id) {
        // TODO: Implement via AJAX
        alert('Duplicate feature coming soon!');
    }
    
    jQuery(document).ready(function($) {
        $('#template_content').on('input', function() {
            const length = $(this).val().length;
            const segments = Math.ceil(length / 160) || 0;
            $('#template-char-count').text(length);
            $('#template-sms-segments').text(segments);
        }).trigger('input');
    });
    </script>
    
    <style>
    .ptp-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }
    
    .ptp-template-category {
        margin-bottom: 32px;
    }
    
    .ptp-template-category-title {
        font-size: 16px;
        font-weight: 600;
        color: var(--ptp-ink);
        margin-bottom: 16px;
        padding-bottom: 8px;
        border-bottom: 2px solid var(--ptp-yellow);
    }
    
    .ptp-template-item {
        border: 1px solid var(--ptp-border);
        border-radius: 12px;
        padding: 16px;
        margin-bottom: 12px;
        background: white;
        transition: var(--ptp-transition);
    }
    
    .ptp-template-item:hover {
        box-shadow: var(--ptp-shadow);
    }
    
    .ptp-template-inactive {
        opacity: 0.6;
    }
    
    .ptp-template-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }
    
    .ptp-template-shortcode {
        display: inline-block;
        padding: 2px 8px;
        background: var(--ptp-yellow-light);
        border: 1px solid var(--ptp-yellow);
        border-radius: 4px;
        font-size: 11px;
        margin-left: 8px;
        color: var(--ptp-yellow);
        font-weight: 600;
    }
    
    .ptp-template-badge {
        display: inline-block;
        padding: 2px 8px;
        border-radius: 999px;
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        margin-left: 8px;
    }
    
    .ptp-template-badge--inactive {
        background: rgba(156, 163, 175, 0.2);
        color: #6b7280;
    }
    
    .ptp-template-usage {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 12px;
        color: var(--ptp-muted);
    }
    
    .ptp-template-content {
        padding: 12px;
        background: var(--ptp-bg);
        border-radius: 8px;
        font-size: 14px;
        line-height: 1.6;
        color: var(--ptp-ink);
        margin-bottom: 12px;
    }
    
    .ptp-template-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 12px;
        border-top: 1px solid var(--ptp-border);
    }
    
    .ptp-template-meta {
        font-size: 11px;
        color: var(--ptp-muted);
    }
    
    .ptp-template-actions {
        display: flex;
        gap: 8px;
    }
    
    .ptp-pill-button--small {
        padding: 6px 12px;
        font-size: 12px;
    }
    
    .ptp-pill-button--small .dashicons {
        font-size: 14px;
        width: 14px;
        height: 14px;
    }
    
    .ptp-pill-button--danger {
        color: #dc2626;
        border-color: rgba(220, 38, 38, 0.3);
    }
    
    .ptp-pill-button--danger:hover {
        background: rgba(220, 38, 38, 0.1);
        border-color: #dc2626;
    }
    </style>
    <?php
}

/**
 * ============================================================================
 * CONTACTS CRM PAGE
 * ============================================================================
 */
function ptp_commhub_render_contacts() {
    global $wpdb;
    
    // Handle CSV import
    if (isset($_POST['import_csv']) && isset($_FILES['csv_file'])) {
        ptp_commhub_import_contacts_csv($_FILES['csv_file']);
        echo '<div class="notice notice-success"><p>Contacts imported successfully!</p></div>';
    }
    
    // Get filter parameters
    $consent_filter = isset($_GET['consent']) ? sanitize_text_field($_GET['consent']) : 'all';
    $market_filter = isset($_GET['market']) ? sanitize_text_field($_GET['market']) : 'all';
    $search = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
    
    // Build query
    $where = array('1=1');
    
    if ($consent_filter !== 'all') {
        $where[] = $wpdb->prepare("consent_status = %s", $consent_filter);
    }
    
    if ($market_filter !== 'all') {
        $where[] = $wpdb->prepare("markets LIKE %s", '%' . $market_filter . '%');
    }
    
    if (!empty($search)) {
        $where[] = $wpdb->prepare(
            "(first_name LIKE %s OR last_name LIKE %s OR email LIKE %s OR phone LIKE %s)",
            '%' . $search . '%', '%' . $search . '%', '%' . $search . '%', '%' . $search . '%'
        );
    }
    
    $where_sql = implode(' AND ', $where);
    
    // Get contacts
    $contacts = $wpdb->get_results("
        SELECT * FROM {$wpdb->prefix}ptp_parents
        WHERE {$where_sql}
        ORDER BY last_contacted_at DESC, created_at DESC
        LIMIT 100
    ");
    
    // Get stats
    $stats = $wpdb->get_row("
        SELECT
            COUNT(*) as total,
            SUM(CASE WHEN consent_status = 'opt_in' THEN 1 ELSE 0 END) as opted_in,
            SUM(CASE WHEN consent_status = 'opt_out' THEN 1 ELSE 0 END) as opted_out,
            SUM(CASE WHEN consent_status = 'unknown' THEN 1 ELSE 0 END) as unknown
        FROM {$wpdb->prefix}ptp_parents
    ");

    // Normalize stats so null counts don't trigger deprecated notices
    $stats = (object) array(
        'total' => isset($stats->total) ? (int) $stats->total : 0,
        'opted_in' => isset($stats->opted_in) ? (int) $stats->opted_in : 0,
        'opted_out' => isset($stats->opted_out) ? (int) $stats->opted_out : 0,
        'unknown' => isset($stats->unknown) ? (int) $stats->unknown : 0
    );
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <div class="ptp-commhub-title">
                    <span class="dashicons dashicons-groups" style="color: var(--ptp-yellow); margin-right: 8px;"></span>
                    Parent Contacts
                </div>
                <p class="description">Manage your parent contact database</p>
            </div>
            
            <div style="display: flex; gap: 10px;">
                <button onclick="ptp_showImportForm()" class="ptp-pill-button">
                    <span class="dashicons dashicons-upload"></span>
                    Import CSV
                </button>
                <button onclick="ptp_exportContacts()" class="ptp-pill-button">
                    <span class="dashicons dashicons-download"></span>
                    Export CSV
                </button>
            </div>
        </header>
        
        <!-- Stats Cards -->
        <div class="ptp-stats-grid">
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Total Contacts</div>
                <div class="ptp-stat-value"><?php echo esc_html(number_format($stats->total)); ?></div>
            </div>
            
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Opted In</div>
                <div class="ptp-stat-value" style="color: #10b981;"><?php echo esc_html(number_format($stats->opted_in)); ?></div>
            </div>
            
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Opted Out</div>
                <div class="ptp-stat-value" style="color: #ef4444;"><?php echo esc_html(number_format($stats->opted_out)); ?></div>
            </div>
            
            <div class="ptp-stat-card">
                <div class="ptp-stat-label">Unknown Status</div>
                <div class="ptp-stat-value" style="color: #6b7280;"><?php echo esc_html(number_format($stats->unknown)); ?></div>
            </div>
        </div>
        
        <!-- Import Form (Hidden) -->
        <div class="ptp-commhub-card" id="import-form" style="margin-top: 20px; display: none;">
            <h3>Import Contacts from CSV</h3>
            <p class="description">Upload a CSV file with columns: first_name, last_name, email, phone, child_names, markets</p>
            
            <form method="post" enctype="multipart/form-data" style="margin-top: 16px;">
                <input type="file" name="csv_file" accept=".csv" required>
                <button type="submit" name="import_csv" class="ptp-pill-button ptp-pill-button--primary" style="margin-left: 10px;">
                    <span class="dashicons dashicons-upload"></span>
                    Import
                </button>
                <button type="button" onclick="ptp_hideImportForm()" class="ptp-pill-button" style="margin-left: 10px;">
                    Cancel
                </button>
            </form>
        </div>
        
        <!-- Filters & Search -->
        <div class="ptp-commhub-card" style="margin-top: 20px;">
            <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
                <div>
                    <label class="ptp-filter-label">Consent Status</label>
                    <select class="ptp-filter-select" onchange="ptp_updateContactFilter('consent', this.value)">
                        <option value="all" <?php selected($consent_filter, 'all'); ?>>All (<?php echo esc_html(number_format($stats->total)); ?>)</option>
                        <option value="opt_in" <?php selected($consent_filter, 'opt_in'); ?>>Opted In (<?php echo esc_html(number_format($stats->opted_in)); ?>)</option>
                        <option value="opt_out" <?php selected($consent_filter, 'opt_out'); ?>>Opted Out (<?php echo esc_html(number_format($stats->opted_out)); ?>)</option>
                        <option value="unknown" <?php selected($consent_filter, 'unknown'); ?>>Unknown (<?php echo esc_html(number_format($stats->unknown)); ?>)</option>
                    </select>
                </div>
                
                <div style="flex: 1;">
                    <form method="get" style="position: relative;">
                        <input type="hidden" name="page" value="ptp-commhub-contacts">
                        <input type="text" name="s" class="ptp-search-input" placeholder="Search contacts..." value="<?php echo esc_attr($search); ?>" style="width: 100%; max-width: 400px;">
                        <button type="submit" class="ptp-pill-button ptp-pill-button--primary" style="margin-left: 10px;">
                            <span class="dashicons dashicons-search"></span>
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Contacts Table -->
        <div class="ptp-commhub-card" style="margin-top: 20px;">
            <?php if (!empty($contacts)): ?>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact Info</th>
                            <th>Children</th>
                            <th>Markets</th>
                            <th>Consent</th>
                            <th>Last Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact): ?>
                            <tr>
                                <td>
                                    <strong><?php echo esc_html($contact->first_name . ' ' . $contact->last_name); ?></strong>
                                </td>
                                <td>
                                    <div style="font-size: 12px;">
                                        <div><span class="dashicons dashicons-phone" style="font-size: 14px;"></span> <?php echo esc_html($contact->phone); ?></div>
                                        <?php if ($contact->email): ?>
                                            <div><span class="dashicons dashicons-email" style="font-size: 14px;"></span> <?php echo esc_html($contact->email); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td><?php echo esc_html($contact->child_names ?: '—'); ?></td>
                                <td><?php echo esc_html($contact->markets ?: '—'); ?></td>
                                <td>
                                    <span class="ptp-consent-badge ptp-consent-<?php echo esc_attr($contact->consent_status); ?>">
                                        <?php echo esc_html(ucfirst($contact->consent_status)); ?>
                                    </span>
                                </td>
                                <td>
                                    <?php 
                                    if ($contact->last_contacted_at) {
                                        echo esc_html(human_time_diff(strtotime($contact->last_contacted_at), current_time('timestamp')) . ' ago');
                                    } else {
                                        echo '—';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo admin_url('admin.php?page=ptp-communication-hub&parent_id=' . $contact->id); ?>" class="button button-small">
                                        View
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="ptp-inbox-empty">
                    <span class="dashicons dashicons-groups"></span>
                    <h3>No contacts found</h3>
                    <p><?php echo $search ? 'Try a different search term' : 'Import your first contacts to get started'; ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
    function ptp_showImportForm() {
        jQuery('#import-form').slideDown();
    }
    
    function ptp_hideImportForm() {
        jQuery('#import-form').slideUp();
    }
    
    function ptp_updateContactFilter(param, value) {
        const url = new URL(window.location.href);
        url.searchParams.set(param, value);
        window.location.href = url.toString();
    }
    
    function ptp_exportContacts() {
        window.location.href = ajaxurl + '?action=ptp_export_contacts&nonce=' + ptpCommHub.nonce;
    }
    </script>
    <?php
}

/**
 * Helper: Import Contacts from CSV
 */
function ptp_commhub_import_contacts_csv($file) {
    global $wpdb;
    
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }
    
    $csv = array_map('str_getcsv', file($file['tmp_name']));
    $headers = array_shift($csv);
    
    foreach ($csv as $row) {
        $data = array_combine($headers, $row);
        
        $wpdb->replace(
            $wpdb->prefix . 'ptp_parents',
            array(
                'first_name' => sanitize_text_field($data['first_name'] ?? ''),
                'last_name' => sanitize_text_field($data['last_name'] ?? ''),
                'email' => sanitize_email($data['email'] ?? ''),
                'phone' => sanitize_text_field($data['phone'] ?? ''),
                'child_names' => sanitize_text_field($data['child_names'] ?? ''),
                'markets' => sanitize_text_field($data['markets'] ?? ''),
                'consent_status' => 'unknown',
                'opted_out' => 0
            ),
            array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d')
        );
    }
    
    ptp_commhub_log_audit('import_contacts', 'contact', null, array('count' => count($csv)));
    
    return true;
}

/**
 * PTP Communication Hub v5.0 - Part 5
 * Settings Page, Audit Log, and System Configuration
 */

/**
 * ============================================================================
 * SETTINGS PAGE
 * ============================================================================
 */
function ptp_commhub_render_settings() {
    if (isset($_POST['save_settings']) && wp_verify_nonce($_POST['_wpnonce'], 'save_settings')) {
        // Twilio Settings
        update_option('ptp_comm_twilio_environment', sanitize_text_field($_POST['twilio_environment']));
        update_option('ptp_comm_twilio_account_sid', sanitize_text_field($_POST['twilio_account_sid']));
        update_option('ptp_comm_twilio_auth_token', sanitize_text_field($_POST['twilio_auth_token']));
        update_option('ptp_comm_twilio_phone_number', sanitize_text_field($_POST['twilio_phone_number']));
        
        // Sandbox Credentials
        update_option('ptp_comm_twilio_sandbox_sid', sanitize_text_field($_POST['twilio_sandbox_sid']));
        update_option('ptp_comm_twilio_sandbox_token', sanitize_text_field($_POST['twilio_sandbox_token']));
        update_option('ptp_comm_twilio_sandbox_phone', sanitize_text_field($_POST['twilio_sandbox_phone']));
        
        // HubSpot
        update_option('ptp_comm_hubspot_api_key', sanitize_text_field($_POST['hubspot_api_key']));
        update_option('ptp_comm_hubspot_sync_enabled', isset($_POST['hubspot_sync_enabled']) ? '1' : '0');
        
        // Slack
        update_option('ptp_comm_slack_webhook_url', sanitize_text_field($_POST['slack_webhook_url']));
        update_option('ptp_comm_slack_notifications_enabled', isset($_POST['slack_notifications_enabled']) ? '1' : '0');
        
        // Quiet Hours
        update_option('ptp_comm_quiet_hours_enabled', isset($_POST['quiet_hours_enabled']) ? '1' : '0');
        update_option('ptp_comm_quiet_hours_start', sanitize_text_field($_POST['quiet_hours_start']));
        update_option('ptp_comm_quiet_hours_end', sanitize_text_field($_POST['quiet_hours_end']));
        update_option('ptp_comm_timezone', sanitize_text_field($_POST['timezone']));
        
        // Business Hours
        update_option('ptp_comm_business_hours_start', sanitize_text_field($_POST['business_hours_start']));
        update_option('ptp_comm_business_hours_end', sanitize_text_field($_POST['business_hours_end']));
        update_option('ptp_comm_operator_phone', sanitize_text_field($_POST['operator_phone']));
        update_option('ptp_comm_support_phone', sanitize_text_field($_POST['support_phone']));
        
        // Messaging
        update_option('ptp_comm_default_signature', sanitize_textarea_field($_POST['default_signature']));
        update_option('ptp_comm_signature_enabled', isset($_POST['signature_enabled']) ? '1' : '0');
        update_option('ptp_comm_queue_enabled', isset($_POST['queue_enabled']) ? '1' : '0');
        update_option('ptp_comm_queue_batch_size', intval($_POST['queue_batch_size']));
        
        // A2P 10DLC
        update_option('ptp_comm_a2p_status', sanitize_text_field($_POST['a2p_status']));
        update_option('ptp_comm_brand_id', sanitize_text_field($_POST['brand_id']));
        update_option('ptp_comm_campaign_id', sanitize_text_field($_POST['campaign_id']));
        
        ptp_commhub_log_audit('update_settings', 'settings', null, $_POST);
        
        echo '<div class="notice notice-success"><p><strong>Settings saved successfully!</strong></p></div>';
    }
    
    // Get current settings
    $twilio_env = get_option('ptp_comm_twilio_environment', 'live');
    $twilio_sid = get_option('ptp_comm_twilio_account_sid', '');
    $twilio_token = get_option('ptp_comm_twilio_auth_token', '');
    $twilio_phone = get_option('ptp_comm_twilio_phone_number', '');
    
    $sandbox_sid = get_option('ptp_comm_twilio_sandbox_sid', '');
    $sandbox_token = get_option('ptp_comm_twilio_sandbox_token', '');
    $sandbox_phone = get_option('ptp_comm_twilio_sandbox_phone', '');
    
    $hubspot_key = get_option('ptp_comm_hubspot_api_key', '');
    $hubspot_sync = get_option('ptp_comm_hubspot_sync_enabled', '1');
    
    $slack_webhook = get_option('ptp_comm_slack_webhook_url', '');
    $slack_enabled = get_option('ptp_comm_slack_notifications_enabled', '1');
    
    $quiet_enabled = get_option('ptp_comm_quiet_hours_enabled', '1');
    $quiet_start = get_option('ptp_comm_quiet_hours_start', '21:00');
    $quiet_end = get_option('ptp_comm_quiet_hours_end', '08:00');
    $timezone = get_option('ptp_comm_timezone', 'America/New_York');
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <div class="ptp-commhub-title">
                    <span class="dashicons dashicons-admin-generic" style="color: var(--ptp-yellow); margin-right: 8px;"></span>
                    System Settings
                </div>
                <p class="description">Configure your communication hub</p>
            </div>
        </header>
        
        <form method="post">
            <?php wp_nonce_field('save_settings'); ?>
            
            <!-- Twilio Configuration -->
            <div class="ptp-commhub-card" style="margin-bottom: 20px;">
                <h2>
                    <span class="dashicons dashicons-phone" style="color: var(--ptp-yellow);"></span>
                    Twilio Configuration
                </h2>
                
                <div class="ptp-settings-environment-toggle">
                    <label class="ptp-env-option">
                        <input type="radio" name="twilio_environment" value="live" <?php checked($twilio_env, 'live'); ?>>
                        <div class="ptp-env-card">
                            <span class="dashicons dashicons-yes-alt"></span>
                            <strong>Live</strong>
                            <span>Production environment</span>
                        </div>
                    </label>
                    
                    <label class="ptp-env-option">
                        <input type="radio" name="twilio_environment" value="sandbox" <?php checked($twilio_env, 'sandbox'); ?>>
                        <div class="ptp-env-card">
                            <span class="dashicons dashicons-admin-tools"></span>
                            <strong>Sandbox</strong>
                            <span>Test environment</span>
                        </div>
                    </label>
                </div>
                
                <div id="live-credentials" class="ptp-credentials-section">
                    <h3>Live Credentials</h3>
                    
                    <table class="form-table">
                        <tr>
                            <th><label for="twilio_account_sid">Account SID</label></th>
                            <td>
                                <input type="text" 
                                       id="twilio_account_sid" 
                                       name="twilio_account_sid" 
                                       value="<?php echo esc_attr($twilio_sid); ?>" 
                                       class="regular-text ptp-masked-input"
                                       placeholder="ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
                                <button type="button" class="ptp-pill-button ptp-pill-button--small" onclick="ptp_toggleMask(this)">
                                    <span class="dashicons dashicons-visibility"></span>
                                    Show
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="twilio_auth_token">Auth Token</label></th>
                            <td>
                                <input type="password" 
                                       id="twilio_auth_token" 
                                       name="twilio_auth_token" 
                                       value="<?php echo esc_attr($twilio_token); ?>" 
                                       class="regular-text ptp-masked-input"
                                       placeholder="••••••••••••••••••••••••••••••••">
                                <button type="button" class="ptp-pill-button ptp-pill-button--small" onclick="ptp_toggleMask(this)">
                                    <span class="dashicons dashicons-visibility"></span>
                                    Show
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="twilio_phone_number">Phone Number</label></th>
                            <td>
                                <input type="text" 
                                       id="twilio_phone_number" 
                                       name="twilio_phone_number" 
                                       value="<?php echo esc_attr($twilio_phone); ?>" 
                                       class="regular-text" 
                                       placeholder="+1234567890">
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div id="sandbox-credentials" class="ptp-credentials-section" style="display: none;">
                    <h3>Sandbox Credentials</h3>
                    
                    <table class="form-table">
                        <tr>
                            <th><label for="twilio_sandbox_sid">Sandbox Account SID</label></th>
                            <td>
                                <input type="text" 
                                       id="twilio_sandbox_sid" 
                                       name="twilio_sandbox_sid" 
                                       value="<?php echo esc_attr($sandbox_sid); ?>" 
                                       class="regular-text ptp-masked-input"
                                       placeholder="ACxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx">
                                <button type="button" class="ptp-pill-button ptp-pill-button--small" onclick="ptp_toggleMask(this)">
                                    <span class="dashicons dashicons-visibility"></span>
                                    Show
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="twilio_sandbox_token">Sandbox Auth Token</label></th>
                            <td>
                                <input type="password" 
                                       id="twilio_sandbox_token" 
                                       name="twilio_sandbox_token" 
                                       value="<?php echo esc_attr($sandbox_token); ?>" 
                                       class="regular-text ptp-masked-input"
                                       placeholder="••••••••••••••••••••••••••••••••">
                                <button type="button" class="ptp-pill-button ptp-pill-button--small" onclick="ptp_toggleMask(this)">
                                    <span class="dashicons dashicons-visibility"></span>
                                    Show
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="twilio_sandbox_phone">Sandbox Phone Number</label></th>
                            <td>
                                <input type="text" 
                                       id="twilio_sandbox_phone" 
                                       name="twilio_sandbox_phone" 
                                       value="<?php echo esc_attr($sandbox_phone); ?>" 
                                       class="regular-text" 
                                       placeholder="+1234567890">
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="ptp-settings-note">
                    <strong>⚠️ Environment Switching:</strong>
                    <p>Sandbox mode is for testing only. All messages in sandbox mode require verified phone numbers. Switch to Live for production use.</p>
                </div>
            </div>
            
            <!-- HubSpot Integration -->
            <div class="ptp-commhub-card" style="margin-bottom: 20px;">
                <h2>
                    <span class="dashicons dashicons-admin-links" style="color: var(--ptp-yellow);"></span>
                    HubSpot Integration
                </h2>
                
                <table class="form-table">
                    <tr>
                        <th><label for="hubspot_api_key">Private App Access Token</label></th>
                        <td>
                            <input type="password" 
                                   id="hubspot_api_key" 
                                   name="hubspot_api_key" 
                                   value="<?php echo esc_attr($hubspot_key); ?>" 
                                   class="regular-text ptp-masked-input"
                                   placeholder="pat-na1-xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx">
                            <button type="button" class="ptp-pill-button ptp-pill-button--small" onclick="ptp_toggleMask(this)">
                                <span class="dashicons dashicons-visibility"></span>
                                Show
                            </button>
                            <p class="description">Create a Private App in HubSpot with Contacts and Timeline permissions</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="hubspot_sync_enabled">Auto-Sync</label></th>
                        <td>
                            <label>
                                <input type="checkbox" 
                                       id="hubspot_sync_enabled" 
                                       name="hubspot_sync_enabled" 
                                       <?php checked($hubspot_sync, '1'); ?>>
                                Automatically sync conversations and contacts to HubSpot
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Slack Integration -->
            <div class="ptp-commhub-card" style="margin-bottom: 20px;">
                <h2>
                    <span class="dashicons dashicons-format-chat" style="color: var(--ptp-yellow);"></span>
                    Slack Integration
                </h2>
                
                <table class="form-table">
                    <tr>
                        <th><label for="slack_webhook_url">Webhook URL</label></th>
                        <td>
                            <input type="text" 
                                   id="slack_webhook_url" 
                                   name="slack_webhook_url" 
                                   value="<?php echo esc_attr($slack_webhook); ?>" 
                                   class="large-text" 
                                   placeholder="https://hooks.slack.com/services/...">
                            <p class="description">Get notifications for new messages, voicemails, and important events</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="slack_notifications_enabled">Notifications</label></th>
                        <td>
                            <label>
                                <input type="checkbox" 
                                       id="slack_notifications_enabled" 
                                       name="slack_notifications_enabled" 
                                       <?php checked($slack_enabled, '1'); ?>>
                                Send notifications to Slack
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Compliance Settings -->
            <div class="ptp-commhub-card" style="margin-bottom: 20px;">
                <h2>
                    <span class="dashicons dashicons-shield-alt" style="color: var(--ptp-yellow);"></span>
                    Compliance & Quiet Hours
                </h2>
                
                <table class="form-table">
                    <tr>
                        <th><label for="quiet_hours_enabled">Quiet Hours</label></th>
                        <td>
                            <label>
                                <input type="checkbox" 
                                       id="quiet_hours_enabled" 
                                       name="quiet_hours_enabled" 
                                       <?php checked($quiet_enabled, '1'); ?>>
                                Enforce quiet hours (messages won't send during these times)
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="quiet_hours_start">Quiet Period</label></th>
                        <td>
                            <input type="time" 
                                   id="quiet_hours_start" 
                                   name="quiet_hours_start" 
                                   value="<?php echo esc_attr($quiet_start); ?>">
                            <span style="margin: 0 10px;">to</span>
                            <input type="time" 
                                   id="quiet_hours_end" 
                                   name="quiet_hours_end" 
                                   value="<?php echo esc_attr($quiet_end); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="timezone">Timezone</label></th>
                        <td>
                            <select id="timezone" name="timezone">
                                <option value="America/New_York" <?php selected($timezone, 'America/New_York'); ?>>Eastern (ET)</option>
                                <option value="America/Chicago" <?php selected($timezone, 'America/Chicago'); ?>>Central (CT)</option>
                                <option value="America/Denver" <?php selected($timezone, 'America/Denver'); ?>>Mountain (MT)</option>
                                <option value="America/Los_Angeles" <?php selected($timezone, 'America/Los_Angeles'); ?>>Pacific (PT)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="default_signature">Message Signature</label></th>
                        <td>
                            <input type="text" 
                                   id="default_signature" 
                                   name="default_signature" 
                                   value="<?php echo esc_attr(get_option('ptp_comm_default_signature', 'Reply STOP to opt out.')); ?>" 
                                   class="large-text">
                            <p class="description">Automatically appended to all outbound messages</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="signature_enabled">Auto-Signature</label></th>
                        <td>
                            <label>
                                <input type="checkbox" 
                                       id="signature_enabled" 
                                       name="signature_enabled" 
                                       <?php checked(get_option('ptp_comm_signature_enabled', '1'), '1'); ?>>
                                Automatically add signature to messages
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Message Queue -->
            <div class="ptp-commhub-card" style="margin-bottom: 20px;">
                <h2>
                    <span class="dashicons dashicons-backup" style="color: var(--ptp-yellow);"></span>
                    Message Queue
                </h2>
                
                <table class="form-table">
                    <tr>
                        <th><label for="queue_enabled">Queue System</label></th>
                        <td>
                            <label>
                                <input type="checkbox" 
                                       id="queue_enabled" 
                                       name="queue_enabled" 
                                       <?php checked(get_option('ptp_comm_queue_enabled', '1'), '1'); ?>>
                                Enable message queue for reliability and rate limiting
                            </label>
                            <p class="description">Recommended: Processes messages in batches to respect Twilio limits</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="queue_batch_size">Batch Size</label></th>
                        <td>
                            <input type="number" 
                                   id="queue_batch_size" 
                                   name="queue_batch_size" 
                                   value="<?php echo esc_attr(get_option('ptp_comm_queue_batch_size', '50')); ?>" 
                                   min="10" 
                                   max="500">
                            <p class="description">Messages processed per minute (default: 50)</p>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Business Hours & IVR -->
            <div class="ptp-commhub-card" style="margin-bottom: 20px;">
                <h2>
                    <span class="dashicons dashicons-businessperson" style="color: var(--ptp-yellow);"></span>
                    Business Hours & IVR
                </h2>
                
                <table class="form-table">
                    <tr>
                        <th><label for="business_hours_start">Business Hours</label></th>
                        <td>
                            <select id="business_hours_start" name="business_hours_start">
                                <?php for ($i = 0; $i < 24; $i++): ?>
                                    <option value="<?php echo $i; ?>" <?php selected(get_option('ptp_comm_business_hours_start', '9'), $i); ?>>
                                        <?php echo date('g:i A', strtotime($i . ':00')); ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                            <span style="margin: 0 10px;">to</span>
                            <select id="business_hours_end" name="business_hours_end">
                                <?php for ($i = 0; $i < 24; $i++): ?>
                                    <option value="<?php echo $i; ?>" <?php selected(get_option('ptp_comm_business_hours_end', '18'), $i); ?>>
                                        <?php echo date('g:i A', strtotime($i . ':00')); ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                            <p class="description">Used for IVR routing and voicemail greetings</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="operator_phone">Operator Phone</label></th>
                        <td>
                            <input type="tel" 
                                   id="operator_phone" 
                                   name="operator_phone" 
                                   value="<?php echo esc_attr(get_option('ptp_comm_operator_phone', '')); ?>" 
                                   class="regular-text" 
                                   placeholder="+1234567890">
                            <p class="description">Phone number to forward calls to (IVR option 0)</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="support_phone">Support Phone (Display)</label></th>
                        <td>
                            <input type="tel" 
                                   id="support_phone" 
                                   name="support_phone" 
                                   value="<?php echo esc_attr(get_option('ptp_comm_support_phone', '')); ?>" 
                                   class="regular-text" 
                                   placeholder="(555) 123-4567">
                            <p class="description">Formatted phone number shown in HELP responses</p>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- A2P 10DLC Registration -->
            <div class="ptp-commhub-card" style="margin-bottom: 20px;">
                <h2>
                    <span class="dashicons dashicons-admin-network" style="color: var(--ptp-yellow);"></span>
                    A2P 10DLC Registration
                </h2>
                
                <table class="form-table">
                    <tr>
                        <th><label for="a2p_status">Registration Status</label></th>
                        <td>
                            <select id="a2p_status" name="a2p_status">
                                <option value="pending" <?php selected(get_option('ptp_comm_a2p_status', 'pending'), 'pending'); ?>>Pending</option>
                                <option value="approved" <?php selected(get_option('ptp_comm_a2p_status', 'pending'), 'approved'); ?>>Approved</option>
                                <option value="rejected" <?php selected(get_option('ptp_comm_a2p_status', 'pending'), 'rejected'); ?>>Rejected</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="brand_id">Brand ID</label></th>
                        <td>
                            <input type="text" 
                                   id="brand_id" 
                                   name="brand_id" 
                                   value="<?php echo esc_attr(get_option('ptp_comm_brand_id', '')); ?>" 
                                   class="regular-text">
                        </td>
                    </tr>
                    <tr>
                        <th><label for="campaign_id">Campaign ID</label></th>
                        <td>
                            <input type="text" 
                                   id="campaign_id" 
                                   name="campaign_id" 
                                   value="<?php echo esc_attr(get_option('ptp_comm_campaign_id', '')); ?>" 
                                   class="regular-text">
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Save Button -->
            <div style="margin-top: 24px;">
                <button type="submit" name="save_settings" class="ptp-pill-button ptp-pill-button--primary" style="font-size: 16px; padding: 12px 24px;">
                    <span class="dashicons dashicons-saved"></span>
                    Save All Settings
                </button>
            </div>
        </form>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        // Environment switching
        $('input[name="twilio_environment"]').change(function() {
            if ($(this).val() === 'live') {
                $('#live-credentials').show();
                $('#sandbox-credentials').hide();
            } else {
                $('#live-credentials').hide();
                $('#sandbox-credentials').show();
            }
        }).trigger('change');
    });
    
    function ptp_toggleMask(button) {
        const input = $(button).prev('input');
        const icon = $(button).find('.dashicons');
        
        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            icon.removeClass('dashicons-visibility').addClass('dashicons-hidden');
            $(button).find('span:last').text('Hide');
        } else {
            input.attr('type', 'password');
            icon.removeClass('dashicons-hidden').addClass('dashicons-visibility');
            $(button).find('span:last').text('Show');
        }
    }
    </script>
    
    <style>
    .ptp-settings-environment-toggle {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin: 20px 0;
    }
    
    .ptp-env-option {
        cursor: pointer;
    }
    
    .ptp-env-option input[type="radio"] {
        position: absolute;
        opacity: 0;
    }
    
    .ptp-env-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        padding: 24px;
        border: 2px solid var(--ptp-border);
        border-radius: 12px;
        background: white;
        transition: var(--ptp-transition);
        text-align: center;
    }
    
    .ptp-env-card .dashicons {
        font-size: 32px;
        width: 32px;
        height: 32px;
        color: var(--ptp-muted);
    }
    
    .ptp-env-card strong {
        font-size: 16px;
        color: var(--ptp-ink);
    }
    
    .ptp-env-card span:last-child {
        font-size: 12px;
        color: var(--ptp-muted);
    }
    
    .ptp-env-option:hover .ptp-env-card {
        border-color: var(--ptp-yellow);
    }
    
    .ptp-env-option input[type="radio"]:checked + .ptp-env-card {
        border-color: var(--ptp-yellow);
        background: var(--ptp-yellow-light);
    }
    
    .ptp-env-option input[type="radio"]:checked + .ptp-env-card .dashicons {
        color: var(--ptp-yellow);
    }
    
    .ptp-credentials-section {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid var(--ptp-border);
    }
    
    .ptp-credentials-section h3 {
        margin: 0 0 16px 0;
        font-size: 16px;
        font-weight: 600;
    }
    
    .ptp-masked-input {
        font-family: 'Courier New', monospace;
    }
    
    .ptp-settings-note {
        margin-top: 16px;
        padding: 12px 16px;
        background: rgba(245, 158, 11, 0.1);
        border-left: 3px solid var(--ptp-yellow);
        border-radius: 4px;
    }
    
    .ptp-settings-note p {
        margin: 4px 0 0 0;
        color: var(--ptp-muted);
    }
    </style>
    <?php
}

/**
 * ============================================================================
 * AUDIT LOG PAGE
 * ============================================================================
 */
function ptp_commhub_render_audit_log() {
    global $wpdb;
    
    // Get filter parameters
    $user_filter = isset($_GET['user']) ? intval($_GET['user']) : 0;
    $action_filter = isset($_GET['action']) ? sanitize_text_field($_GET['action']) : 'all';
    $days_filter = isset($_GET['days']) ? intval($_GET['days']) : 7;
    
    // Build query
    $where = array('1=1');
    
    if ($user_filter > 0) {
        $where[] = $wpdb->prepare("user_id = %d", $user_filter);
    }
    
    if ($action_filter !== 'all') {
        $where[] = $wpdb->prepare("action = %s", $action_filter);
    }
    
    $where[] = $wpdb->prepare("created_at >= DATE_SUB(NOW(), INTERVAL %d DAY)", $days_filter);
    
    $where_sql = implode(' AND ', $where);
    
    // Get logs
    $logs = $wpdb->get_results("
        SELECT 
            l.*,
            u.display_name as user_name,
            u.user_email
        FROM {$wpdb->prefix}ptp_audit_log l
        JOIN {$wpdb->users} u ON l.user_id = u.ID
        WHERE {$where_sql}
        ORDER BY l.created_at DESC
        LIMIT 500
    ");
    
    // Get unique actions for filter
    $actions = $wpdb->get_col("
        SELECT DISTINCT action 
        FROM {$wpdb->prefix}ptp_audit_log 
        ORDER BY action
    ");
    
    ?>
    <div class="ptp-commhub-wrap">
        <header class="ptp-commhub-header">
            <div>
                <div class="ptp-commhub-title">
                    <span class="dashicons dashicons-list-view" style="color: var(--ptp-yellow); margin-right: 8px;"></span>
                    System Audit Log
                </div>
                <p class="description">Track all system actions and changes</p>
            </div>
        </header>
        
        <!-- Filters -->
        <div class="ptp-commhub-card" style="margin-bottom: 20px;">
            <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
                <div>
                    <label class="ptp-filter-label">Time Period</label>
                    <select class="ptp-filter-select" onchange="ptp_updateAuditFilter('days', this.value)">
                        <option value="1" <?php selected($days_filter, 1); ?>>Last 24 Hours</option>
                        <option value="7" <?php selected($days_filter, 7); ?>>Last 7 Days</option>
                        <option value="30" <?php selected($days_filter, 30); ?>>Last 30 Days</option>
                        <option value="90" <?php selected($days_filter, 90); ?>>Last 90 Days</option>
                    </select>
                </div>
                
                <div>
                    <label class="ptp-filter-label">Action Type</label>
                    <select class="ptp-filter-select" onchange="ptp_updateAuditFilter('action', this.value)">
                        <option value="all" <?php selected($action_filter, 'all'); ?>>All Actions</option>
                        <?php foreach ($actions as $action): ?>
                            <option value="<?php echo esc_attr($action); ?>" <?php selected($action_filter, $action); ?>>
                                <?php echo esc_html(ucwords(str_replace('_', ' ', $action))); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Audit Log Table -->
        <div class="ptp-commhub-card">
            <?php if (!empty($logs)): ?>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th width="180">Timestamp</th>
                            <th width="150">User</th>
                            <th width="200">Action</th>
                            <th width="120">Entity</th>
                            <th>Details</th>
                            <th width="120">IP Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($logs as $log): ?>
                            <tr>
                                <td><?php echo esc_html(date('Y-m-d H:i:s', strtotime($log->created_at))); ?></td>
                                <td>
                                    <strong><?php echo esc_html($log->user_name); ?></strong>
                                    <div class="row-actions">
                                        <span><?php echo esc_html($log->user_email); ?></span>
                                    </div>
                                </td>
                                <td>
                                    <code class="ptp-audit-action"><?php echo esc_html($log->action); ?></code>
                                </td>
                                <td>
                                    <?php if ($log->entity_type): ?>
                                        <?php echo esc_html(ucfirst($log->entity_type)); ?> #<?php echo esc_html($log->entity_id); ?>
                                    <?php else: ?>
                                        —
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($log->payload): ?>
                                        <button class="ptp-pill-button ptp-pill-button--small" onclick="ptp_showPayload(<?php echo esc_attr($log->id); ?>)">
                                            <span class="dashicons dashicons-visibility"></span>
                                            View Details
                                        </button>
                                        <div id="payload-<?php echo esc_attr($log->id); ?>" style="display: none;" class="ptp-payload-container">
                                            <pre><?php echo esc_html(json_encode(json_decode($log->payload), JSON_PRETTY_PRINT)); ?></pre>
                                        </div>
                                    <?php else: ?>
                                        —
                                    <?php endif; ?>
                                </td>
                                <td><?php echo esc_html($log->ip_address); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="ptp-inbox-empty">
                    <span class="dashicons dashicons-list-view"></span>
                    <h3>No audit logs found</h3>
                    <p>Try adjusting your filters</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script>
    function ptp_updateAuditFilter(param, value) {
        const url = new URL(window.location.href);
        url.searchParams.set(param, value);
        window.location.href = url.toString();
    }
    
    function ptp_showPayload(id) {
        jQuery('#payload-' + id).slideToggle();
    }
    </script>
    
    <style>
    .ptp-audit-action {
        display: inline-block;
        padding: 4px 8px;
        background: var(--ptp-bg);
        border: 1px solid var(--ptp-border);
        border-radius: 4px;
        font-size: 11px;
        font-family: 'Courier New', monospace;
    }
    
    .ptp-payload-container {
        margin-top: 8px;
        padding: 12px;
        background: var(--ptp-bg);
        border-radius: 8px;
        max-height: 300px;
        overflow: auto;
    }
    
    .ptp-payload-container pre {
        margin: 0;
        font-size: 11px;
        line-height: 1.6;
        color: var(--ptp-ink);
    }
    </style>
    <?php
}

// Helper: Parse Merge Tags
function ptp_commhub_parse_merge_tags($content, $parent_id) {
    global $wpdb;
    
    $parent = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
        $parent_id
    ));
    
    if (!$parent) {
        return $content;
    }
    
    $replacements = array(
        '{{first_name}}' => $parent->first_name,
        '{{last_name}}' => $parent->last_name,
        '{{child_name}}' => $parent->child_names,
        '{{market}}' => $parent->markets,
        '{{event_type}}' => '', // Can be populated from context
        '{{event_date}}' => '',
        '{{venue}}' => '',
        '{{camp_url}}' => get_site_url()
    );
    
    return str_replace(array_keys($replacements), array_values($replacements), $content);
}

/**
 * ============================================================================
 * INTEGRATION CLASSES
 * ============================================================================
 */

/**
 * Enhanced Twilio Integration
 *
 * Handles SMS, Voice, Voicemail, and IVR
 */


class PTP_Twilio_Integration {
    
    private $account_sid;
    private $auth_token;
    private $phone_number;
    private $api_base = 'https://api.twilio.com/2010-04-01';
    
    public function __construct() {
        $this->account_sid = get_option('ptp_comm_twilio_account_sid', '');
        $this->auth_token = get_option('ptp_comm_twilio_auth_token', '');
        $this->phone_number = get_option('ptp_comm_twilio_phone_number', '');
    }
    
    /**
     * Send SMS
     */
    public function send_sms($to, $message) {
        if (!$this->is_configured()) {
            return false;
        }
        
        $url = "{$this->api_base}/Accounts/{$this->account_sid}/Messages.json";
        
        $data = array(
            'From' => $this->phone_number,
            'To' => $this->format_phone($to),
            'Body' => $message
        );
        
        $response = $this->make_request($url, 'POST', $data);
        
        if (is_wp_error($response)) {
            error_log('Twilio SMS error: ' . $response->get_error_message());
            return false;
        }
        
        return $response;
    }
    
    /**
     * Make Voice Call
     */
    public function make_call($to, $twiml_url = null) {
        if (!$this->is_configured()) {
            return false;
        }
        
        if (!$twiml_url) {
            $twiml_url = rest_url('ptp-comm/v1/voice/twiml');
        }
        
        $url = "{$this->api_base}/Accounts/{$this->account_sid}/Calls.json";
        
        $data = array(
            'From' => $this->phone_number,
            'To' => $this->format_phone($to),
            'Url' => $twiml_url,
            'Record' => 'true',
            'RecordingStatusCallback' => rest_url('ptp-comm/v1/voice/recording-complete')
        );
        
        $response = $this->make_request($url, 'POST', $data);
        
        if (is_wp_error($response)) {
            error_log('Twilio call error: ' . $response->get_error_message());
            return false;
        }
        
        return $response;
    }
    
    /**
     * Get Call Status
     */
    public function get_call_status($call_sid) {
        if (!$this->is_configured()) {
            return false;
        }
        
        $url = "{$this->api_base}/Accounts/{$this->account_sid}/Calls/{$call_sid}.json";
        
        $response = $this->make_request($url, 'GET');
        
        return is_wp_error($response) ? false : $response;
    }
    
    /**
     * Get Recording
     */
    public function get_recording($recording_sid) {
        if (!$this->is_configured()) {
            return false;
        }
        
        $url = "{$this->api_base}/Accounts/{$this->account_sid}/Recordings/{$recording_sid}.json";
        
        $response = $this->make_request($url, 'GET');
        
        return is_wp_error($response) ? false : $response;
    }
    
    /**
     * Get Recording URL
     */
    public function get_recording_url($recording_sid) {
        return "https://api.twilio.com{$this->api_base}/Accounts/{$this->account_sid}/Recordings/{$recording_sid}.mp3";
    }
    
    /**
     * Get Transcription
     */
    public function get_transcription($transcription_sid) {
        if (!$this->is_configured()) {
            return false;
        }
        
        $url = "{$this->api_base}/Accounts/{$this->account_sid}/Transcriptions/{$transcription_sid}.json";
        
        $response = $this->make_request($url, 'GET');
        
        return is_wp_error($response) ? false : $response;
    }
    
    /**
     * Generate IVR TwiML
     */
    public function generate_ivr_twiml() {
        $schedule = $this->get_call_schedule();
        
        header('Content-Type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<Response>';
        
        if ($schedule['available']) {
            // During business hours
            echo '<Gather action="' . rest_url('ptp-comm/v1/voice/ivr-response') . '" numDigits="1" timeout="10">';
            echo '<Say>Thank you for calling P T P Soccer Camps.</Say>';
            echo '<Say>Press 1 for today\'s clinic information.</Say>';
            echo '<Say>Press 2 for summer camp registration.</Say>';
            echo '<Say>Press 0 or stay on the line to speak with someone.</Say>';
            echo '</Gather>';
            
            // If no input, route to voicemail
            echo '<Say>We didn\'t receive your selection.</Say>';
            echo '<Redirect>' . rest_url('ptp-comm/v1/voice/voicemail') . '</Redirect>';
        } else {
            // After hours
            echo '<Say>Thank you for calling P T P Soccer Camps. We are currently closed.</Say>';
            echo '<Say>Our hours are Monday through Friday, 9 A M to 6 P M.</Say>';
            echo '<Say>Please leave a message after the tone, and we\'ll get back to you as soon as possible.</Say>';
            echo '<Record maxLength="120" transcribe="true" transcribeCallback="' . rest_url('ptp-comm/v1/voice/voicemail-complete') . '" />';
        }
        
        echo '</Response>';
        exit;
    }
    
    /**
     * Handle IVR Response
     */
    public function handle_ivr_response($digit) {
        header('Content-Type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<Response>';
        
        switch ($digit) {
            case '1':
                // Today's clinic info
                $today_events = $this->get_today_events();
                
                if ($today_events) {
                    echo '<Say>' . $this->format_event_announcement($today_events) . '</Say>';
                } else {
                    echo '<Say>There are no clinics scheduled for today.</Say>';
                }
                
                echo '<Say>To speak with someone, please stay on the line.</Say>';
                echo '<Dial timeout="30">' . get_option('ptp_comm_operator_phone', '') . '</Dial>';
                break;
                
            case '2':
                // Summer camp info
                echo '<Say>Summer camps fill up fast! Visit P T P soccer camps dot com to register.</Say>';
                echo '<Say>Or stay on the line to speak with our team about available dates and locations.</Say>';
                echo '<Dial timeout="30">' . get_option('ptp_comm_operator_phone', '') . '</Dial>';
                break;
                
            case '0':
            default:
                // Route to operator
                $operator_phone = get_option('ptp_comm_operator_phone', '');
                
                if ($operator_phone) {
                    echo '<Say>Please hold while we connect you.</Say>';
                    echo '<Dial timeout="30">' . $operator_phone . '</Dial>';
                } else {
                    echo '<Say>All representatives are currently busy.</Say>';
                }
                
                echo '<Redirect>' . rest_url('ptp-comm/v1/voice/voicemail') . '</Redirect>';
                break;
        }
        
        echo '</Response>';
        exit;
    }
    
    /**
     * Generate Voicemail TwiML
     */
    public function generate_voicemail_twiml() {
        header('Content-Type: text/xml');
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<Response>';
        echo '<Say>Please leave a message after the tone. Press pound when finished.</Say>';
        echo '<Record maxLength="120" finishOnKey="#" transcribe="true" transcribeCallback="' . rest_url('ptp-comm/v1/voice/voicemail-complete') . '" />';
        echo '<Say>We did not receive a recording. Goodbye.</Say>';
        echo '</Response>';
        exit;
    }
    
    /**
     * Handle Voicemail Complete
     */
    public function handle_voicemail_complete($call_data) {
        global $wpdb;
        
        $from = $call_data['From'] ?? '';
        $recording_url = $call_data['RecordingUrl'] ?? '';
        $recording_duration = $call_data['RecordingDuration'] ?? 0;
        $transcription = $call_data['TranscriptionText'] ?? '';
        
        // Find or create parent
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE phone = %s",
            $from
        ));
        
        $parent_id = $parent ? $parent->id : $this->create_parent_from_phone($from);
        
        if (!$parent_id) {
            return;
        }
        
        // Log voicemail as call record
        $wpdb->insert(
            $wpdb->prefix . 'ptp_voice_calls',
            array(
                'parent_id' => $parent_id,
                'direction' => 'inbound',
                'from_number' => $from,
                'to_number' => $this->phone_number,
                'status' => 'voicemail',
                'duration' => $recording_duration,
                'voicemail_url' => $recording_url,
                'transcription' => $transcription,
                'started_at' => current_time('mysql')
            ),
            array('%d', '%s', '%s', '%s', '%s', '%d', '%s', '%s', '%s')
        );
        
        // Send "missed call" SMS
        $this->send_sms(
            $from,
            "Hi! We received your voicemail. We'll get back to you as soon as possible. Thanks for reaching out to PTP Soccer Camps!"
        );
        
        // Create HubSpot task
        if (class_exists('PTP_HubSpot_Integration')) {
            $hubspot = new PTP_HubSpot_Integration();
            
            if ($parent && $parent->hubspot_id) {
                $hubspot->create_task(
                    $parent->hubspot_id,
                    'New Voicemail from ' . ($parent->first_name ? $parent->first_name . ' ' . $parent->last_name : $from),
                    "Voicemail transcription:\n\n" . ($transcription ?: '[No transcription available]') . "\n\nListen: " . $recording_url,
                    'HIGH'
                );
            }
        }
        
        // Send Slack notification
        $this->send_slack_notification_voicemail($parent_id, $transcription, $recording_url);
    }
    
    /**
     * Get Call Schedule
     */
    private function get_call_schedule() {
        $timezone = get_option('ptp_comm_timezone', 'America/New_York');
        date_default_timezone_set($timezone);
        
        $current_hour = (int)date('G');
        $current_day = date('N'); // 1 = Monday, 7 = Sunday
        
        $start_hour = get_option('ptp_comm_business_hours_start', 9);
        $end_hour = get_option('ptp_comm_business_hours_end', 18);
        
        $available = (
            $current_day <= 5 && // Monday-Friday
            $current_hour >= $start_hour &&
            $current_hour < $end_hour
        );
        
        return array(
            'available' => $available,
            'next_available' => $this->get_next_available_time()
        );
    }
    
    /**
     * Get Next Available Time
     */
    private function get_next_available_time() {
        $timezone = get_option('ptp_comm_timezone', 'America/New_York');
        date_default_timezone_set($timezone);
        
        $start_hour = get_option('ptp_comm_business_hours_start', 9);
        $current_day = date('N');
        
        if ($current_day <= 5) {
            // Today or tomorrow
            return 'tomorrow at ' . $start_hour . ' AM';
        } else {
            // Next Monday
            return 'Monday at ' . $start_hour . ' AM';
        }
    }
    
    /**
     * Get Today's Events
     */
    private function get_today_events() {
        global $wpdb;
        
        $today = date('Y-m-d');
        
        // Query WooCommerce orders with events today
        $results = $wpdb->get_results($wpdb->prepare("
            SELECT DISTINCT pm.meta_value as event_data
            FROM {$wpdb->postmeta} pm
            WHERE pm.meta_key = '_ptp_event_data'
            AND pm.meta_value LIKE %s
        ", '%' . $today . '%'));
        
        $events = array();
        
        foreach ($results as $result) {
            $event_data = maybe_unserialize($result->event_data);
            
            if (is_array($event_data) && $event_data['event_date'] === $today) {
                $events[] = $event_data;
            }
        }
        
        return $events;
    }
    
    /**
     * Format Event Announcement
     */
    private function format_event_announcement($events) {
        if (empty($events)) {
            return 'No events today.';
        }
        
        $announcement = 'Today we have ';
        $event_list = array();
        
        foreach ($events as $event) {
            $event_list[] = sprintf(
                '%s at %s',
                $event['event_type'],
                $event['venue'] ?: $event['market']
            );
        }
        
        $announcement .= implode(', and ', $event_list);
        
        return $announcement;
    }
    
    /**
     * Create Parent from Phone
     */
    private function create_parent_from_phone($phone) {
        global $wpdb;
        
        $wpdb->insert(
            $wpdb->prefix . 'ptp_parents',
            array(
                'first_name' => 'Unknown',
                'last_name' => 'Caller',
                'email' => '',
                'phone' => $phone,
                'tags' => 'Voicemail'
            ),
            array('%s', '%s', '%s', '%s', '%s')
        );
        
        $parent_id = $wpdb->insert_id;
        
        do_action('ptp_parent_created', $parent_id);
        
        return $parent_id;
    }
    
    /**
     * Send Slack Notification for Voicemail
     */
    private function send_slack_notification_voicemail($parent_id, $transcription, $recording_url) {
        global $wpdb;
        
        $webhook_url = get_option('ptp_comm_slack_webhook_url', '');
        
        if (empty($webhook_url)) {
            return;
        }
        
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
            $parent_id
        ));
        
        if (!$parent) {
            return;
        }
        
        $message = array(
            'text' => '📞 New Voicemail',
            'blocks' => array(
                array(
                    'type' => 'header',
                    'text' => array(
                        'type' => 'plain_text',
                        'text' => '📞 New Voicemail'
                    )
                ),
                array(
                    'type' => 'section',
                    'fields' => array(
                        array(
                            'type' => 'mrkdwn',
                            'text' => '*From:* ' . $parent->first_name . ' ' . $parent->last_name
                        ),
                        array(
                            'type' => 'mrkdwn',
                            'text' => '*Phone:* ' . $parent->phone
                        )
                    )
                ),
                array(
                    'type' => 'section',
                    'text' => array(
                        'type' => 'mrkdwn',
                        'text' => '*Transcription:*\n' . ($transcription ?: '_No transcription available_')
                    )
                ),
                array(
                    'type' => 'actions',
                    'elements' => array(
                        array(
                            'type' => 'button',
                            'text' => array(
                                'type' => 'plain_text',
                                'text' => 'Listen to Recording'
                            ),
                            'url' => $recording_url
                        )
                    )
                )
            )
        );
        
        wp_remote_post($webhook_url, array(
            'body' => json_encode($message),
            'headers' => array('Content-Type' => 'application/json')
        ));
    }
    
    /**
     * Make API Request
     */
    private function make_request($url, $method = 'GET', $data = null) {
        $args = array(
            'method' => $method,
            'headers' => array(
                'Authorization' => 'Basic ' . base64_encode("{$this->account_sid}:{$this->auth_token}")
            ),
            'timeout' => 30
        );
        
        if ($data && in_array($method, array('POST', 'PUT'))) {
            $args['body'] = $data;
        }
        
        $response = wp_remote_request($url, $args);
        
        if (is_wp_error($response)) {
            return $response;
        }
        
        $code = wp_remote_retrieve_response_code($response);
        $body = json_decode(wp_remote_retrieve_body($response), true);
        
        if ($code >= 400) {
            return new WP_Error('twilio_error', $body['message'] ?? 'Twilio API error', array('code' => $code));
        }
        
        return $body;
    }
    
    /**
     * Format Phone
     */
    private function format_phone($phone) {
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        if (strlen($phone) === 10) {
            $phone = '1' . $phone;
        }
        
        return '+' . $phone;
    }
    
    /**
     * Check if Configured
     */
    private function is_configured() {
        return !empty($this->account_sid) && !empty($this->auth_token) && !empty($this->phone_number);
    }
}

/**
 * HubSpot Integration Class
 * 
 * Handles bi-directional sync with HubSpot CRM
 */


class PTP_HubSpot_Integration {
    
    private $api_key;
    private $api_base = 'https://api.hubapi.com';
    
    public function __construct() {
        $this->api_key = get_option('ptp_comm_hubspot_api_key', '');
        
        // Hooks for auto-sync
        add_action('ptp_parent_created', array($this, 'sync_parent_to_hubspot'), 10, 1);
        add_action('ptp_parent_updated', array($this, 'sync_parent_to_hubspot'), 10, 1);
        add_action('ptp_message_sent', array($this, 'log_sms_to_hubspot'), 10, 2);
        add_action('ptp_call_completed', array($this, 'log_call_to_hubspot'), 10, 2);
    }
    
    /**
     * Make API Request to HubSpot
     */
    private function api_request($endpoint, $method = 'GET', $data = null) {
        if (empty($this->api_key)) {
            return new WP_Error('no_api_key', 'HubSpot API key not configured');
        }
        
        $url = $this->api_base . $endpoint;
        
        $args = array(
            'method' => $method,
            'headers' => array(
                'Authorization' => 'Bearer ' . $this->api_key,
                'Content-Type' => 'application/json'
            ),
            'timeout' => 30
        );
        
        if ($data && in_array($method, array('POST', 'PUT', 'PATCH'))) {
            $args['body'] = json_encode($data);
        }
        
        $response = wp_remote_request($url, $args);
        
        if (is_wp_error($response)) {
            return $response;
        }
        
        $code = wp_remote_retrieve_response_code($response);
        $body = json_decode(wp_remote_retrieve_body($response), true);
        
        if ($code >= 400) {
            return new WP_Error('hubspot_error', $body['message'] ?? 'HubSpot API error', array('code' => $code));
        }
        
        return $body;
    }
    
    /**
     * Find or Create Contact by Phone
     */
    public function find_or_create_contact($phone, $parent_data = array()) {
        // Search by phone
        $contact = $this->search_contact_by_phone($phone);
        
        if ($contact) {
            return $contact;
        }
        
        // Create new contact
        return $this->create_contact($parent_data);
    }
    
    /**
     * Search Contact by Phone
     */
    public function search_contact_by_phone($phone) {
        $phone = $this->format_phone($phone);
        
        $response = $this->api_request(
            '/crm/v3/objects/contacts/search',
            'POST',
            array(
                'filterGroups' => array(
                    array(
                        'filters' => array(
                            array(
                                'propertyName' => 'phone',
                                'operator' => 'EQ',
                                'value' => $phone
                            )
                        )
                    )
                ),
                'properties' => array('firstname', 'lastname', 'email', 'phone')
            )
        );
        
        if (is_wp_error($response)) {
            return false;
        }
        
        if (!empty($response['results'])) {
            return $response['results'][0];
        }
        
        return false;
    }
    
    /**
     * Create Contact
     */
    public function create_contact($data) {
        $properties = array(
            'phone' => $this->format_phone($data['phone']),
            'firstname' => $data['first_name'] ?? '',
            'lastname' => $data['last_name'] ?? '',
            'email' => $data['email'] ?? ''
        );
        
        // Add custom properties
        if (!empty($data['child_names'])) {
            $properties['child_names'] = $data['child_names'];
        }
        
        if (!empty($data['markets'])) {
            $properties['markets'] = $data['markets'];
        }
        
        if (!empty($data['tags'])) {
            $properties['ptp_tags'] = $data['tags'];
        }
        
        $response = $this->api_request(
            '/crm/v3/objects/contacts',
            'POST',
            array('properties' => $properties)
        );
        
        if (is_wp_error($response)) {
            error_log('HubSpot create contact failed: ' . $response->get_error_message());
            return false;
        }
        
        return $response;
    }
    
    /**
     * Update Contact
     */
    public function update_contact($hubspot_id, $data) {
        $properties = array();
        
        if (isset($data['first_name'])) {
            $properties['firstname'] = $data['first_name'];
        }
        
        if (isset($data['last_name'])) {
            $properties['lastname'] = $data['last_name'];
        }
        
        if (isset($data['email'])) {
            $properties['email'] = $data['email'];
        }
        
        if (isset($data['phone'])) {
            $properties['phone'] = $this->format_phone($data['phone']);
        }
        
        if (isset($data['child_names'])) {
            $properties['child_names'] = $data['child_names'];
        }
        
        if (isset($data['markets'])) {
            $properties['markets'] = $data['markets'];
        }
        
        if (isset($data['tags'])) {
            $properties['ptp_tags'] = $data['tags'];
        }
        
        $response = $this->api_request(
            "/crm/v3/objects/contacts/{$hubspot_id}",
            'PATCH',
            array('properties' => $properties)
        );
        
        return !is_wp_error($response);
    }
    
    /**
     * Sync Parent to HubSpot
     */
    public function sync_parent_to_hubspot($parent_id) {
        global $wpdb;
        
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
            $parent_id
        ));
        
        if (!$parent) {
            return false;
        }
        
        $data = array(
            'first_name' => $parent->first_name,
            'last_name' => $parent->last_name,
            'email' => $parent->email,
            'phone' => $parent->phone,
            'tags' => $parent->tags,
            'markets' => $parent->markets,
            'child_names' => $parent->child_names
        );
        
        if (empty($parent->hubspot_id)) {
            // Create new contact
            $contact = $this->create_contact($data);
            
            if ($contact && isset($contact['id'])) {
                $wpdb->update(
                    $wpdb->prefix . 'ptp_parents',
                    array('hubspot_id' => $contact['id']),
                    array('id' => $parent_id),
                    array('%s'),
                    array('%d')
                );
            }
        } else {
            // Update existing contact
            $this->update_contact($parent->hubspot_id, $data);
        }
        
        return true;
    }
    
    /**
     * Log SMS to HubSpot Timeline
     */
    public function log_sms_to_hubspot($parent_id, $message_id) {
        global $wpdb;
        
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
            $parent_id
        ));
        
        $message = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_messages WHERE id = %d",
            $message_id
        ));
        
        if (!$parent || !$parent->hubspot_id || !$message) {
            return false;
        }
        
        // Create engagement (note)
        $engagement_data = array(
            'engagement' => array(
                'active' => true,
                'type' => 'NOTE',
                'timestamp' => strtotime($message->created_at) * 1000
            ),
            'associations' => array(
                'contactIds' => array((int)$parent->hubspot_id)
            ),
            'metadata' => array(
                'body' => sprintf(
                    "SMS %s:\n\n%s",
                    $message->direction === 'inbound' ? 'Received' : 'Sent',
                    $message->content
                )
            )
        );
        
        $response = $this->api_request(
            '/engagements/v1/engagements',
            'POST',
            $engagement_data
        );
        
        return !is_wp_error($response);
    }
    
    /**
     * Log Call to HubSpot Timeline
     */
    public function log_call_to_hubspot($parent_id, $call_id) {
        global $wpdb;
        
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
            $parent_id
        ));
        
        $call = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_voice_calls WHERE id = %d",
            $call_id
        ));
        
        if (!$parent || !$parent->hubspot_id || !$call) {
            return false;
        }
        
        $engagement_data = array(
            'engagement' => array(
                'active' => true,
                'type' => 'CALL',
                'timestamp' => strtotime($call->started_at) * 1000
            ),
            'associations' => array(
                'contactIds' => array((int)$parent->hubspot_id)
            ),
            'metadata' => array(
                'toNumber' => $call->to_number,
                'fromNumber' => $call->from_number,
                'status' => strtoupper($call->status),
                'durationMilliseconds' => ($call->duration ?? 0) * 1000,
                'recordingUrl' => $call->recording_url ?? '',
                'body' => $call->transcription ?? 'Call ' . $call->direction
            )
        );
        
        $response = $this->api_request(
            '/engagements/v1/engagements',
            'POST',
            $engagement_data
        );
        
        return !is_wp_error($response);
    }
    
    /**
     * Add Contact to List
     */
    public function add_to_list($hubspot_id, $list_id) {
        $response = $this->api_request(
            "/contacts/v1/lists/{$list_id}/add",
            'POST',
            array(
                'vids' => array((int)$hubspot_id)
            )
        );
        
        return !is_wp_error($response);
    }
    
    /**
     * Remove Contact from List
     */
    public function remove_from_list($hubspot_id, $list_id) {
        $response = $this->api_request(
            "/contacts/v1/lists/{$list_id}/remove",
            'POST',
            array(
                'vids' => array((int)$hubspot_id)
            )
        );
        
        return !is_wp_error($response);
    }
    
    /**
     * Get All Lists
     */
    public function get_lists() {
        $response = $this->api_request('/contacts/v1/lists');
        
        if (is_wp_error($response)) {
            return array();
        }
        
        return $response['lists'] ?? array();
    }
    
    /**
     * Create Task/Ticket
     */
    public function create_task($hubspot_id, $subject, $body, $priority = 'MEDIUM') {
        $task_data = array(
            'engagement' => array(
                'active' => true,
                'type' => 'TASK',
                'timestamp' => time() * 1000
            ),
            'associations' => array(
                'contactIds' => array((int)$hubspot_id)
            ),
            'metadata' => array(
                'body' => $body,
                'subject' => $subject,
                'status' => 'NOT_STARTED',
                'priority' => $priority,
                'taskType' => 'TODO'
            )
        );
        
        $response = $this->api_request(
            '/engagements/v1/engagements',
            'POST',
            $task_data
        );
        
        return !is_wp_error($response);
    }
    
    /**
     * Format Phone Number
     */
    private function format_phone($phone) {
        // Remove all non-numeric characters
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // Add +1 if not present
        if (strlen($phone) === 10) {
            $phone = '1' . $phone;
        }
        
        return '+' . $phone;
    }
    
    /**
     * Pull Contact Data from HubSpot
     */
    public function pull_contact_from_hubspot($hubspot_id) {
        $response = $this->api_request("/crm/v3/objects/contacts/{$hubspot_id}");
        
        if (is_wp_error($response)) {
            return false;
        }
        
        return $response;
    }
    
    /**
     * Batch Sync Parents to HubSpot
     */
    public function batch_sync_parents($limit = 50) {
        global $wpdb;
        
        // Get parents without HubSpot ID or updated recently
        $parents = $wpdb->get_results($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents 
            WHERE hubspot_id IS NULL OR updated_at > DATE_SUB(NOW(), INTERVAL 1 HOUR)
            LIMIT %d",
            $limit
        ));
        
        $synced = 0;
        
        foreach ($parents as $parent) {
            if ($this->sync_parent_to_hubspot($parent->id)) {
                $synced++;
            }
            
            // Rate limiting - HubSpot allows 100 requests per 10 seconds
            usleep(100000); // 0.1 second delay
        }
        
        return $synced;
    }
}

/**
 * WooCommerce Integration Class
 * 
 * Handles order processing, parent creation, and transactional messaging
 */


class PTP_WooCommerce_Integration {
    
    public function __construct() {
        // Order hooks
        add_action('woocommerce_thankyou', array($this, 'process_order'), 10, 1);
        add_action('woocommerce_order_status_processing', array($this, 'send_order_confirmation'), 10, 1);
        add_action('woocommerce_order_status_completed', array($this, 'send_completion_message'), 10, 1);
        add_action('woocommerce_order_status_refunded', array($this, 'handle_refund'), 10, 1);
        add_action('woocommerce_order_status_cancelled', array($this, 'handle_cancellation'), 10, 1);
        
        // Checkout hooks for custom fields
        add_action('woocommerce_after_order_notes', array($this, 'add_checkout_fields'));
        add_action('woocommerce_checkout_update_order_meta', array($this, 'save_checkout_fields'));
        
        // Abandoned cart (optional)
        add_action('woocommerce_cart_updated', array($this, 'track_cart_activity'));
        add_action('ptp_check_abandoned_carts', array($this, 'check_abandoned_carts'));
        
        // Schedule abandoned cart check (daily)
        if (!wp_next_scheduled('ptp_check_abandoned_carts')) {
            wp_schedule_event(time(), 'daily', 'ptp_check_abandoned_carts');
        }
    }
    
    /**
     * Add Custom Checkout Fields
     */
    public function add_checkout_fields($checkout) {
        echo '<div class="ptp-checkout-fields"><h3>' . __('Event Information') . '</h3>';
        
        woocommerce_form_field('ptp_child_name', array(
            'type' => 'text',
            'class' => array('form-row-wide'),
            'label' => __('Child\'s First Name'),
            'required' => true,
            'placeholder' => 'Enter child\'s first name',
        ), $checkout->get_value('ptp_child_name'));
        
        woocommerce_form_field('ptp_child_age', array(
            'type' => 'number',
            'class' => array('form-row-first'),
            'label' => __('Child\'s Age'),
            'required' => true,
            'placeholder' => 'Age',
            'custom_attributes' => array('min' => 4, 'max' => 18)
        ), $checkout->get_value('ptp_child_age'));
        
        woocommerce_form_field('ptp_emergency_contact', array(
            'type' => 'tel',
            'class' => array('form-row-last'),
            'label' => __('Emergency Contact Phone'),
            'placeholder' => '+1 (234) 567-8900',
        ), $checkout->get_value('ptp_emergency_contact'));
        
        echo '</div>';
    }
    
    /**
     * Save Custom Checkout Fields
     */
    public function save_checkout_fields($order_id) {
        if (!empty($_POST['ptp_child_name'])) {
            update_post_meta($order_id, '_ptp_child_name', sanitize_text_field($_POST['ptp_child_name']));
        }
        
        if (!empty($_POST['ptp_child_age'])) {
            update_post_meta($order_id, '_ptp_child_age', intval($_POST['ptp_child_age']));
        }
        
        if (!empty($_POST['ptp_emergency_contact'])) {
            update_post_meta($order_id, '_ptp_emergency_contact', sanitize_text_field($_POST['ptp_emergency_contact']));
        }
    }
    
    /**
     * Process Order and Create/Update Parent
     */
    public function process_order($order_id) {
        global $wpdb;
        
        $order = wc_get_order($order_id);
        
        if (!$order) {
            return;
        }
        
        // Extract data
        $billing_phone = $order->get_billing_phone();
        $billing_email = $order->get_billing_email();
        $first_name = $order->get_billing_first_name();
        $last_name = $order->get_billing_last_name();
        
        // Get event details from line items
        $event_data = $this->extract_event_data($order);
        
        // Format phone
        $phone = $this->format_phone($billing_phone);
        
        if (empty($phone)) {
            return;
        }
        
        // Check if parent exists
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE phone = %s",
            $phone
        ));
        
        if ($parent) {
            // Update existing parent
            $child_names = get_post_meta($order_id, '_ptp_child_name', true);
            $existing_children = $parent->child_names ? explode(',', $parent->child_names) : array();
            
            if ($child_names && !in_array($child_names, $existing_children)) {
                $existing_children[] = $child_names;
            }
            
            // Add new markets/tags from this order
            $markets = $parent->markets ? explode(',', $parent->markets) : array();
            if ($event_data['market'] && !in_array($event_data['market'], $markets)) {
                $markets[] = $event_data['market'];
            }
            
            $wpdb->update(
                $wpdb->prefix . 'ptp_parents',
                array(
                    'child_names' => implode(',', array_filter($existing_children)),
                    'markets' => implode(',', array_filter($markets)),
                    'woocommerce_id' => $order_id
                ),
                array('id' => $parent->id),
                array('%s', '%s', '%d'),
                array('%d')
            );
            
            $parent_id = $parent->id;
            
        } else {
            // Create new parent
            $child_name = get_post_meta($order_id, '_ptp_child_name', true);
            
            $wpdb->insert(
                $wpdb->prefix . 'ptp_parents',
                array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $billing_email,
                    'phone' => $phone,
                    'child_names' => $child_name,
                    'markets' => $event_data['market'],
                    'tags' => $event_data['event_type'],
                    'woocommerce_id' => $order_id
                ),
                array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d')
            );
            
            $parent_id = $wpdb->insert_id;
            
            do_action('ptp_parent_created', $parent_id);
        }
        
        // Store event details
        update_post_meta($order_id, '_ptp_parent_id', $parent_id);
        update_post_meta($order_id, '_ptp_event_data', $event_data);
        
        // Sync to HubSpot
        if (class_exists('PTP_HubSpot_Integration')) {
            $hubspot = new PTP_HubSpot_Integration();
            $hubspot->sync_parent_to_hubspot($parent_id);
        }
        
        return $parent_id;
    }
    
    /**
     * Extract Event Data from Order
     */
    private function extract_event_data($order) {
        $event_data = array(
            'event_type' => '',
            'market' => '',
            'event_date' => '',
            'event_time' => '',
            'venue' => ''
        );
        
        foreach ($order->get_items() as $item) {
            $product = $item->get_product();
            
            if (!$product) {
                continue;
            }
            
            // Extract from product name/categories
            $product_name = $product->get_name();
            
            // Detect event type
            if (stripos($product_name, 'winter') !== false) {
                $event_data['event_type'] = 'Winter';
            } elseif (stripos($product_name, 'summer') !== false) {
                $event_data['event_type'] = 'Summer';
            } elseif (stripos($product_name, 'clinic') !== false) {
                $event_data['event_type'] = 'Clinic';
            } elseif (stripos($product_name, 'camp') !== false) {
                $event_data['event_type'] = 'Camp';
            }
            
            // Get from item meta
            $event_date = $item->get_meta('_event_date');
            $event_time = $item->get_meta('_event_time');
            $market = $item->get_meta('_market');
            $venue = $item->get_meta('_venue');
            
            if ($event_date) {
                $event_data['event_date'] = $event_date;
            }
            
            if ($event_time) {
                $event_data['event_time'] = $event_time;
            }
            
            if ($market) {
                $event_data['market'] = $market;
            }
            
            if ($venue) {
                $event_data['venue'] = $venue;
            }
            
            // Get categories
            $categories = wp_get_post_terms($product->get_id(), 'product_cat', array('fields' => 'names'));
            
            if (!empty($categories)) {
                foreach ($categories as $cat) {
                    if (stripos($cat, 'steelyard') !== false) {
                        $event_data['market'] = 'Steelyard';
                    } elseif (stripos($cat, 'westfield') !== false) {
                        $event_data['market'] = 'Westfield';
                    } elseif (stripos($cat, 'carmel') !== false) {
                        $event_data['market'] = 'Carmel';
                    }
                }
            }
        }
        
        return $event_data;
    }
    
    /**
     * Send Order Confirmation SMS
     */
    public function send_order_confirmation($order_id) {
        $parent_id = get_post_meta($order_id, '_ptp_parent_id', true);
        
        if (!$parent_id) {
            $parent_id = $this->process_order($order_id);
        }
        
        if (!$parent_id) {
            return;
        }
        
        $order = wc_get_order($order_id);
        $event_data = get_post_meta($order_id, '_ptp_event_data', true);
        $child_name = get_post_meta($order_id, '_ptp_child_name', true);
        
        $message = sprintf(
            "Thanks for registering %s for %s! We'll send you reminders before the event. Order #%s",
            $child_name ?: 'your child',
            $event_data['event_type'] ?: 'our program',
            $order->get_order_number()
        );
        
        // Send SMS
        ptp_comm_send_sms($parent_id, $message);
        
        // Schedule reminders
        $this->schedule_event_reminders($parent_id, $order_id, $event_data);
    }
    
    /**
     * Schedule Event Reminders
     */
    private function schedule_event_reminders($parent_id, $order_id, $event_data) {
        if (empty($event_data['event_date'])) {
            return;
        }
        
        $event_timestamp = strtotime($event_data['event_date']);
        
        if (!$event_timestamp) {
            return;
        }
        
        $child_name = get_post_meta($order_id, '_ptp_child_name', true);
        $venue = $event_data['venue'] ?: 'the venue';
        
        // T-7 days reminder
        $t7 = $event_timestamp - (7 * DAY_IN_SECONDS);
        if ($t7 > time()) {
            wp_schedule_single_event($t7, 'ptp_send_reminder', array(
                'parent_id' => $parent_id,
                'message' => sprintf(
                    "Hi! Just a reminder that %s's %s is 1 week away on %s at %s. See you there!",
                    $child_name,
                    $event_data['event_type'],
                    date('l, M j', $event_timestamp),
                    $venue
                )
            ));
        }
        
        // T-3 days reminder
        $t3 = $event_timestamp - (3 * DAY_IN_SECONDS);
        if ($t3 > time()) {
            wp_schedule_single_event($t3, 'ptp_send_reminder', array(
                'parent_id' => $parent_id,
                'message' => sprintf(
                    "Reminder: %s's %s is in 3 days! %s at %s. Bring water, sunscreen, and soccer gear.",
                    $child_name,
                    $event_data['event_type'],
                    date('l, M j', $event_timestamp),
                    $event_data['event_time'] ?: 'TBD'
                )
            ));
        }
        
        // Day-of reminder
        $day_of = $event_timestamp - (4 * HOUR_IN_SECONDS);
        if ($day_of > time()) {
            wp_schedule_single_event($day_of, 'ptp_send_reminder', array(
                'parent_id' => $parent_id,
                'message' => sprintf(
                    "Today's the day! %s's %s starts at %s. Check your email for any last-minute updates. Can't wait to see you!",
                    $child_name,
                    $event_data['event_type'],
                    $event_data['event_time'] ?: 'soon'
                )
            ));
        }
        
        // Post-event survey (24 hours after)
        $post_event = $event_timestamp + DAY_IN_SECONDS;
        if ($post_event > time()) {
            wp_schedule_single_event($post_event, 'ptp_send_reminder', array(
                'parent_id' => $parent_id,
                'message' => sprintf(
                    "Hope %s had a blast! Quick survey (30 sec): [link]. Summer camps fill fast - reply SUMMER for priority access!",
                    $child_name
                )
            ));
        }
    }
    
    /**
     * Send Completion Message
     */
    public function send_completion_message($order_id) {
        // Optional: send when order is marked completed
    }
    
    /**
     * Handle Refund
     */
    public function handle_refund($order_id) {
        $parent_id = get_post_meta($order_id, '_ptp_parent_id', true);
        
        if (!$parent_id) {
            return;
        }
        
        $order = wc_get_order($order_id);
        $child_name = get_post_meta($order_id, '_ptp_child_name', true);
        
        $message = sprintf(
            "Your refund for %s's registration (Order #%s) has been processed. We hope to see you at a future event!",
            $child_name ?: 'your child',
            $order->get_order_number()
        );
        
        ptp_comm_send_sms($parent_id, $message);
    }
    
    /**
     * Handle Cancellation
     */
    public function handle_cancellation($order_id) {
        $parent_id = get_post_meta($order_id, '_ptp_parent_id', true);
        
        if (!$parent_id) {
            return;
        }
        
        $order = wc_get_order($order_id);
        $child_name = get_post_meta($order_id, '_ptp_child_name', true);
        
        $message = sprintf(
            "Order #%s for %s has been cancelled. If you have questions, reply to this message or call us.",
            $order->get_order_number(),
            $child_name ?: 'your child'
        );
        
        ptp_comm_send_sms($parent_id, $message);
    }
    
    /**
     * Track Cart Activity for Abandoned Cart Detection
     */
    public function track_cart_activity() {
        if (!is_user_logged_in() && WC()->cart && !WC()->cart->is_empty()) {
            $cart_data = array(
                'items' => WC()->cart->get_cart(),
                'timestamp' => time()
            );
            
            WC()->session->set('ptp_cart_activity', $cart_data);
        }
    }
    
    /**
     * Check for Abandoned Carts
     */
    public function check_abandoned_carts() {
        global $wpdb;
        
        // Get sessions with abandoned carts (24-48 hours old)
        $sessions = $wpdb->get_results("
            SELECT session_key, session_value 
            FROM {$wpdb->prefix}woocommerce_sessions 
            WHERE session_expiry > UNIX_TIMESTAMP() 
            AND session_value LIKE '%ptp_cart_activity%'
        ");
        
        foreach ($sessions as $session) {
            $data = maybe_unserialize($session->session_value);
            
            if (isset($data['ptp_cart_activity'])) {
                $cart_data = maybe_unserialize($data['ptp_cart_activity']);
                $timestamp = $cart_data['timestamp'];
                
                // Check if 24-48 hours old
                $hours_ago = (time() - $timestamp) / HOUR_IN_SECONDS;
                
                if ($hours_ago >= 24 && $hours_ago <= 48) {
                    // Send abandoned cart SMS
                    // Need to extract phone from cart or session
                    // This would require additional cart tracking implementation
                }
            }
        }
    }
    
    /**
     * Format Phone Number
     */
    private function format_phone($phone) {
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        if (strlen($phone) === 10) {
            $phone = '1' . $phone;
        }
        
        return '+' . $phone;
    }
    
    /**
     * Get Parent Orders
     */
    public function get_parent_orders($parent_id) {
        global $wpdb;
        
        return $wpdb->get_results($wpdb->prepare("
            SELECT post_id as order_id 
            FROM {$wpdb->postmeta} 
            WHERE meta_key = '_ptp_parent_id' 
            AND meta_value = %d
        ", $parent_id));
    }
    
    /**
     * Get Upcoming Events for Parent
     */
    public function get_parent_upcoming_events($parent_id) {
        $orders = $this->get_parent_orders($parent_id);
        $events = array();
        
        foreach ($orders as $order_data) {
            $order = wc_get_order($order_data->order_id);
            
            if (!$order || $order->get_status() === 'cancelled') {
                continue;
            }
            
            $event_data = get_post_meta($order_data->order_id, '_ptp_event_data', true);
            
            if (!empty($event_data['event_date'])) {
                $event_timestamp = strtotime($event_data['event_date']);
                
                if ($event_timestamp > time()) {
                    $events[] = array(
                        'order_id' => $order_data->order_id,
                        'event_date' => $event_data['event_date'],
                        'event_time' => $event_data['event_time'],
                        'event_type' => $event_data['event_type'],
                        'market' => $event_data['market'],
                        'venue' => $event_data['venue'],
                        'child_name' => get_post_meta($order_data->order_id, '_ptp_child_name', true)
                    );
                }
            }
        }
        
        // Sort by date
        usort($events, function($a, $b) {
            return strtotime($a['event_date']) - strtotime($b['event_date']);
        });
        
        return $events;
    }
}

// Handle scheduled reminders
add_action('ptp_send_reminder', 'ptp_comm_send_scheduled_reminder', 10, 1);
function ptp_comm_send_scheduled_reminder($args) {
    if (isset($args['parent_id']) && isset($args['message'])) {
        ptp_comm_send_sms($args['parent_id'], $args['message']);
    }
}

/**
 * Compliance Tracking System
 * 
 * Handles A2P 10DLC, TCPA, opt-in/out, and STOP/HELP keywords
 */


class PTP_Compliance_System {
    
    private $stop_keywords = array('STOP', 'STOPALL', 'UNSUBSCRIBE', 'CANCEL', 'END', 'QUIT');
    private $help_keywords = array('HELP', 'INFO', 'INFORMATION');
    private $optin_keywords = array('START', 'YES', 'UNSTOP');
    
    public function __construct() {
        // Handle inbound keyword responses
        add_action('ptp_sms_received', array($this, 'handle_keywords'), 5, 2);
        
        // Check compliance before sending
        add_filter('ptp_can_send_sms', array($this, 'check_can_send'), 10, 2);
        
        // Admin menu
        add_action('admin_menu', array($this, 'add_compliance_menu'), 20);
    }
    
    /**
     * Handle STOP, HELP, START Keywords
     */
    public function handle_keywords($from, $body) {
        global $wpdb;
        
        $body_upper = strtoupper(trim($body));
        
        // Find parent
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE phone = %s",
            $from
        ));
        
        if (!$parent) {
            return;
        }
        
        // STOP keywords
        if (in_array($body_upper, $this->stop_keywords)) {
            $this->handle_opt_out($parent->id, 'sms');
            $this->send_opt_out_confirmation($parent->id);
            return;
        }
        
        // HELP keywords
        if (in_array($body_upper, $this->help_keywords)) {
            $this->send_help_response($parent->id);
            return;
        }
        
        // START/UNSTOP keywords
        if (in_array($body_upper, $this->optin_keywords)) {
            $this->handle_opt_in($parent->id, 'sms');
            $this->send_opt_in_confirmation($parent->id);
            return;
        }
    }
    
    /**
     * Handle Opt-Out
     */
    public function handle_opt_out($parent_id, $channel = 'sms') {
        global $wpdb;
        
        // Update parent opt-out status
        $wpdb->update(
            $wpdb->prefix . 'ptp_parents',
            array('opted_out' => 1),
            array('id' => $parent_id),
            array('%d'),
            array('%d')
        );
        
        // Log compliance event
        $this->log_compliance_event($parent_id, 'opt_out', $channel, 'User requested opt-out via ' . strtoupper($channel));
        
        // Sync to HubSpot
        if (class_exists('PTP_HubSpot_Integration')) {
            $parent = $wpdb->get_row($wpdb->prepare(
                "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
                $parent_id
            ));
            
            if ($parent && $parent->hubspot_id) {
                $hubspot = new PTP_HubSpot_Integration();
                $hubspot->update_contact($parent->hubspot_id, array('ptp_opt_out' => 'true'));
            }
        }
        
        do_action('ptp_parent_opted_out', $parent_id, $channel);
    }
    
    /**
     * Handle Opt-In
     */
    public function handle_opt_in($parent_id, $channel = 'sms') {
        global $wpdb;
        
        // Update parent opt-in status
        $wpdb->update(
            $wpdb->prefix . 'ptp_parents',
            array('opted_out' => 0),
            array('id' => $parent_id),
            array('%d'),
            array('%d')
        );
        
        // Log compliance event
        $this->log_compliance_event($parent_id, 'opt_in', $channel, 'User opted back in via ' . strtoupper($channel));
        
        // Sync to HubSpot
        if (class_exists('PTP_HubSpot_Integration')) {
            $parent = $wpdb->get_row($wpdb->prepare(
                "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
                $parent_id
            ));
            
            if ($parent && $parent->hubspot_id) {
                $hubspot = new PTP_HubSpot_Integration();
                $hubspot->update_contact($parent->hubspot_id, array('ptp_opt_out' => 'false'));
            }
        }
        
        do_action('ptp_parent_opted_in', $parent_id, $channel);
    }
    
    /**
     * Send Opt-Out Confirmation
     */
    private function send_opt_out_confirmation($parent_id) {
        ptp_comm_send_sms(
            $parent_id,
            "You've been unsubscribed from PTP Soccer Camps messages. Reply START to opt back in. Questions? Call us at " . get_option('ptp_comm_support_phone', '(555) 123-4567'),
            true // bypass opt-out check for this confirmation
        );
    }
    
    /**
     * Send Opt-In Confirmation
     */
    private function send_opt_in_confirmation($parent_id) {
        ptp_comm_send_sms(
            $parent_id,
            "Welcome back! You're now subscribed to PTP Soccer Camps messages. Reply STOP to opt out anytime.",
            true
        );
    }
    
    /**
     * Send HELP Response
     */
    private function send_help_response($parent_id) {
        ptp_comm_send_sms(
            $parent_id,
            "PTP Soccer Camps: For help, call " . get_option('ptp_comm_support_phone', '(555) 123-4567') . " or visit ptpsoccercamps.com. Reply STOP to unsubscribe.",
            true
        );
    }
    
    /**
     * Check if Can Send Message
     */
    public function check_can_send($can_send, $parent_id) {
        global $wpdb;
        
        $parent = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
            $parent_id
        ));
        
        if (!$parent) {
            return false;
        }
        
        // Check opt-out status
        if ($parent->opted_out) {
            return false;
        }
        
        // Check quiet hours (unless transactional)
        if (!$this->is_during_allowed_hours()) {
            return false;
        }
        
        return $can_send;
    }
    
    /**
     * Check if During Allowed Hours
     */
    private function is_during_allowed_hours() {
        $enabled = get_option('ptp_comm_quiet_hours_enabled', '1');
        
        if ($enabled !== '1') {
            return true;
        }
        
        $start = get_option('ptp_comm_quiet_hours_start', '21:00');
        $end = get_option('ptp_comm_quiet_hours_end', '08:00');
        $timezone = get_option('ptp_comm_timezone', 'America/New_York');
        
        date_default_timezone_set($timezone);
        $current_time = date('H:i');
        
        if ($start > $end) {
            // Crosses midnight
            return !($current_time >= $start || $current_time < $end);
        } else {
            return !($current_time >= $start && $current_time < $end);
        }
    }
    
    /**
     * Log Compliance Event
     */
    public function log_compliance_event($parent_id, $event_type, $channel, $details = '') {
        global $wpdb;
        
        $wpdb->insert(
            $wpdb->prefix . 'ptp_compliance_log',
            array(
                'parent_id' => $parent_id,
                'event_type' => $event_type,
                'channel' => $channel,
                'details' => $details,
                'ip_address' => $this->get_ip_address(),
                'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? ''
            ),
            array('%d', '%s', '%s', '%s', '%s', '%s')
        );
    }
    
    /**
     * Track Opt-In from Checkout
     */
    public function track_checkout_opt_in($parent_id, $order_id) {
        // Assume implicit opt-in via checkout
        $this->handle_opt_in($parent_id, 'checkout');
        
        $this->log_compliance_event(
            $parent_id,
            'opt_in',
            'checkout',
            'Implicit opt-in via WooCommerce checkout (Order #' . $order_id . ')'
        );
    }
    
    /**
     * Get Compliance Report
     */
    public function get_compliance_report() {
        global $wpdb;
        
        $report = array();
        
        // Total opted-in parents
        $report['total_opted_in'] = $wpdb->get_var("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_parents WHERE opted_out = 0
        ");
        
        // Total opted-out parents
        $report['total_opted_out'] = $wpdb->get_var("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_parents WHERE opted_out = 1
        ");
        
        // Opt-outs last 30 days
        $report['opt_outs_30_days'] = $wpdb->get_var("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_compliance_log 
            WHERE event_type = 'opt_out' 
            AND created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)
        ");
        
        // Opt-ins last 30 days
        $report['opt_ins_30_days'] = $wpdb->get_var("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_compliance_log 
            WHERE event_type = 'opt_in' 
            AND created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)
        ");
        
        // Messages sent during quiet hours (violations)
        $report['quiet_hours_violations'] = $wpdb->get_var("
            SELECT COUNT(*) FROM {$wpdb->prefix}ptp_compliance_log 
            WHERE event_type = 'quiet_hours_violation'
        ");
        
        return $report;
    }
    
    /**
     * Add Compliance Menu
     */
    public function add_compliance_menu() {
        add_submenu_page(
            'ptp-comm-dashboard',
            __('Compliance', 'ptp-communication-hub'),
            __('Compliance', 'ptp-communication-hub'),
            'ptp_manage_settings',
            'ptp-comm-compliance',
            array($this, 'compliance_page')
        );
    }
    
    /**
     * Compliance Admin Page
     */
    public function compliance_page() {
        $report = $this->get_compliance_report();
        
        ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Compliance Dashboard', 'ptp-communication-hub'); ?></h1>
            
            <h2><?php echo esc_html__('A2P 10DLC Status', 'ptp-communication-hub'); ?></h2>
            <table class="form-table">
                <tr>
                    <th>Registration Status</th>
                    <td>
                        <?php 
                        $a2p_status = get_option('ptp_comm_a2p_status', 'pending');
                        echo '<span class="ptp-status-badge ptp-status-' . esc_attr($a2p_status) . '">' . esc_html(ucfirst($a2p_status)) . '</span>';
                        ?>
                        <p class="description">Your A2P 10DLC registration with Twilio</p>
                    </td>
                </tr>
                <tr>
                    <th>Brand Registration</th>
                    <td>
                        <?php echo esc_html(get_option('ptp_comm_brand_id', 'Not registered')); ?>
                    </td>
                </tr>
                <tr>
                    <th>Campaign ID</th>
                    <td>
                        <?php echo esc_html(get_option('ptp_comm_campaign_id', 'Not registered')); ?>
                    </td>
                </tr>
            </table>
            
            <h2><?php echo esc_html__('Opt-In/Out Summary', 'ptp-communication-hub'); ?></h2>
            <div class="ptp-comm-stats">
                <div class="ptp-stat-box">
                    <h3><?php echo esc_html($report['total_opted_in']); ?></h3>
                    <p>Opted In</p>
                </div>
                
                <div class="ptp-stat-box">
                    <h3><?php echo esc_html($report['total_opted_out']); ?></h3>
                    <p>Opted Out</p>
                </div>
                
                <div class="ptp-stat-box">
                    <h3><?php echo esc_html($report['opt_ins_30_days']); ?></h3>
                    <p>Opt-Ins (30 Days)</p>
                </div>
                
                <div class="ptp-stat-box">
                    <h3><?php echo esc_html($report['opt_outs_30_days']); ?></h3>
                    <p>Opt-Outs (30 Days)</p>
                </div>
            </div>
            
            <h2><?php echo esc_html__('Recent Compliance Events', 'ptp-communication-hub'); ?></h2>
            <?php
            global $wpdb;
            
            $events = $wpdb->get_results("
                SELECT cl.*, p.first_name, p.last_name, p.phone
                FROM {$wpdb->prefix}ptp_compliance_log cl
                JOIN {$wpdb->prefix}ptp_parents p ON cl.parent_id = p.id
                ORDER BY cl.created_at DESC
                LIMIT 50
            ");
            
            if ($events):
            ?>
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Parent</th>
                            <th>Phone</th>
                            <th>Event Type</th>
                            <th>Channel</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events as $event): ?>
                            <tr>
                                <td><?php echo esc_html(date('Y-m-d H:i', strtotime($event->created_at))); ?></td>
                                <td><?php echo esc_html($event->first_name . ' ' . $event->last_name); ?></td>
                                <td><?php echo esc_html($event->phone); ?></td>
                                <td>
                                    <span class="ptp-event-type ptp-event-<?php echo esc_attr($event->event_type); ?>">
                                        <?php echo esc_html(ucwords(str_replace('_', ' ', $event->event_type))); ?>
                                    </span>
                                </td>
                                <td><?php echo esc_html(strtoupper($event->channel)); ?></td>
                                <td><?php echo esc_html($event->details); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p><?php echo esc_html__('No compliance events logged yet.', 'ptp-communication-hub'); ?></p>
            <?php endif; ?>
        </div>
        
        <style>
        .ptp-status-badge {
            padding: 5px 10px;
            border-radius: 3px;
            font-weight: bold;
        }
        .ptp-status-approved {
            background: #00a32a;
            color: #fff;
        }
        .ptp-status-pending {
            background: #f0b849;
            color: #000;
        }
        .ptp-status-rejected {
            background: #d63638;
            color: #fff;
        }
        .ptp-event-type {
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 11px;
            font-weight: bold;
        }
        .ptp-event-opt_in {
            background: #d5f4e6;
            color: #007017;
        }
        .ptp-event-opt_out {
            background: #fef1e6;
            color: #9c4221;
        }
        </style>
        <?php
    }
    
    /**
     * Get IP Address
     */
    private function get_ip_address() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return $_SERVER['REMOTE_ADDR'] ?? '';
        }
    }
    
    /**
     * Export Compliance Report
     */
    public function export_compliance_report() {
        if (!current_user_can('ptp_manage_settings')) {
            return false;
        }
        
        global $wpdb;
        
        $events = $wpdb->get_results("
            SELECT cl.*, p.first_name, p.last_name, p.email, p.phone
            FROM {$wpdb->prefix}ptp_compliance_log cl
            JOIN {$wpdb->prefix}ptp_parents p ON cl.parent_id = p.id
            ORDER BY cl.created_at DESC
        ");
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="ptp-compliance-report-' . date('Y-m-d') . '.csv"');
        
        $output = fopen('php://output', 'w');
        
        fputcsv($output, array('Time', 'First Name', 'Last Name', 'Email', 'Phone', 'Event Type', 'Channel', 'Details', 'IP Address'));
        
        foreach ($events as $event) {
            fputcsv($output, array(
                $event->created_at,
                $event->first_name,
                $event->last_name,
                $event->email,
                $event->phone,
                $event->event_type,
                $event->channel,
                $event->details,
                $event->ip_address
            ));
        }
        
        fclose($output);
        exit;
    }
}

/**
 * Send SMS via Twilio (with Compliance)
 */
function ptp_comm_send_sms($parent_id, $content, $bypass_opt_out = false) {
    global $wpdb;
    
    $parent = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d", $parent_id));
    
    if (!$parent) {
        return false;
    }
    
    // Check compliance unless bypassed (for opt-out confirmations)
    if (!$bypass_opt_out) {
        $can_send = apply_filters('ptp_can_send_sms', true, $parent_id);
        
        if (!$can_send) {
            error_log('Cannot send SMS to parent ' . $parent_id . ' - compliance check failed');
            return false;
        }
    }
    
    // Use Twilio integration class
    $twilio = new PTP_Twilio_Integration();
    $result = $twilio->send_sms($parent->phone, $content);
    
    if (!$result) {
        return false;
    }
    
    // Insert message record
    $wpdb->insert(
        $wpdb->prefix . 'ptp_messages',
        array(
            'parent_id' => $parent_id,
            'direction' => 'outbound',
            'message_type' => 'sms',
            'content' => $content,
            'twilio_sid' => $result['sid'] ?? '',
            'status' => 'sent',
            'sent_at' => current_time('mysql')
        ),
        array('%d', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    $message_id = $wpdb->insert_id;
    
    // Update conversation
    $wpdb->query($wpdb->prepare("
        INSERT INTO {$wpdb->prefix}ptp_conversations (parent_id, last_message_id, last_message_at)
        VALUES (%d, %d, NOW())
        ON DUPLICATE KEY UPDATE last_message_id = %d, last_message_at = NOW()
    ", $parent_id, $message_id, $message_id));
    
    // Trigger hooks for HubSpot sync
    do_action('ptp_message_sent', $parent_id, $message_id);
    
    return true;
}

/**
 * Check Quiet Hours
 */
function ptp_comm_check_quiet_hours() {
    $enabled = get_option('ptp_comm_quiet_hours_enabled', '1');
    
    if ($enabled !== '1') {
        return true;
    }
    
    $start = get_option('ptp_comm_quiet_hours_start', '21:00');
    $end = get_option('ptp_comm_quiet_hours_end', '08:00');
    $timezone = get_option('ptp_comm_timezone', 'America/New_York');
    
    date_default_timezone_set($timezone);
    $current_time = date('H:i');
    
    if ($start > $end) {
        // Crosses midnight
        return !($current_time >= $start || $current_time < $end);
    } else {
        return !($current_time >= $start && $current_time < $end);
    }
}

/**
 * Import Parents from CSV
 */
function ptp_comm_import_parents_csv($file) {
    global $wpdb;
    
    if ($file['error'] !== UPLOAD_ERR_OK) {
        return false;
    }
    
    $csv = array_map('str_getcsv', file($file['tmp_name']));
    $headers = array_shift($csv);
    
    foreach ($csv as $row) {
        $data = array_combine($headers, $row);
        
        $wpdb->replace(
            $wpdb->prefix . 'ptp_parents',
            array(
                'first_name' => sanitize_text_field($data['first_name']),
                'last_name' => sanitize_text_field($data['last_name']),
                'email' => sanitize_email($data['email']),
                'phone' => sanitize_text_field($data['phone']),
                'tags' => isset($data['tags']) ? sanitize_text_field($data['tags']) : ''
            ),
            array('%s', '%s', '%s', '%s', '%s')
        );
    }
    
    return true;
}

/**
 * Register REST API Endpoints
 */
function ptp_comm_register_rest_routes() {
    // SMS webhook
    register_rest_route('ptp-comm/v1', '/webhook/twilio', array(
        'methods' => 'POST',
        'callback' => 'ptp_comm_twilio_webhook',
        'permission_callback' => '__return_true'
    ));
    
    // Voice call webhook
    register_rest_route('ptp-comm/v1', '/webhook/voice', array(
        'methods' => 'POST',
        'callback' => 'ptp_comm_voice_webhook',
        'permission_callback' => '__return_true'
    ));
    
    // IVR TwiML generator
    register_rest_route('ptp-comm/v1', '/voice/twiml', array(
        'methods' => array('GET', 'POST'),
        'callback' => 'ptp_comm_voice_twiml',
        'permission_callback' => '__return_true'
    ));
    
    // IVR response handler
    register_rest_route('ptp-comm/v1', '/voice/ivr-response', array(
        'methods' => 'POST',
        'callback' => 'ptp_comm_ivr_response',
        'permission_callback' => '__return_true'
    ));
    
    // Voicemail TwiML
    register_rest_route('ptp-comm/v1', '/voice/voicemail', array(
        'methods' => array('GET', 'POST'),
        'callback' => 'ptp_comm_voicemail_twiml',
        'permission_callback' => '__return_true'
    ));
    
    // Voicemail complete callback
    register_rest_route('ptp-comm/v1', '/voice/voicemail-complete', array(
        'methods' => 'POST',
        'callback' => 'ptp_comm_voicemail_complete',
        'permission_callback' => '__return_true'
    ));
    
    // Recording complete callback
    register_rest_route('ptp-comm/v1', '/voice/recording-complete', array(
        'methods' => 'POST',
        'callback' => 'ptp_comm_recording_complete',
        'permission_callback' => '__return_true'
    ));
    
    // Live chat message
    register_rest_route('ptp-comm/v1', '/chat/message', array(
        'methods' => 'POST',
        'callback' => 'ptp_comm_chat_message',
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'ptp_comm_register_rest_routes');

/**
 * Twilio SMS Webhook Handler
 */
function ptp_comm_twilio_webhook($request) {
    global $wpdb;
    
    $params = $request->get_params();
    
    $from = sanitize_text_field($params['From']);
    $body = sanitize_textarea_field($params['Body']);
    $sid = sanitize_text_field($params['MessageSid']);
    
    // Trigger keyword handling (STOP, HELP, START)
    do_action('ptp_sms_received', $from, $body);
    
    // Find parent by phone
    $parent = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}ptp_parents WHERE phone = %s", $from));
    
    if ($parent) {
        $wpdb->insert(
            $wpdb->prefix . 'ptp_messages',
            array(
                'parent_id' => $parent->id,
                'direction' => 'inbound',
                'message_type' => 'sms',
                'content' => $body,
                'twilio_sid' => $sid,
                'status' => 'received',
                'sent_at' => current_time('mysql')
            ),
            array('%d', '%s', '%s', '%s', '%s', '%s', '%s')
        );
        
        $message_id = $wpdb->insert_id;
        
        // Update conversation
        $wpdb->query($wpdb->prepare("
            INSERT INTO {$wpdb->prefix}ptp_conversations (parent_id, last_message_id, last_message_at, unread_count)
            VALUES (%d, %d, NOW(), 1)
            ON DUPLICATE KEY UPDATE last_message_at = NOW(), unread_count = unread_count + 1
        ", $parent->id, $message_id));
        
        // Log to HubSpot
        do_action('ptp_message_received', $parent->id, $message_id);
    }
    
    return new WP_REST_Response('OK', 200);
}

/**
 * Voice Call Webhook Handler
 */
function ptp_comm_voice_webhook($request) {
    $twilio = new PTP_Twilio_Integration();
    $twilio->generate_ivr_twiml();
}

/**
 * Voice TwiML Generator
 */
function ptp_comm_voice_twiml($request) {
    $twilio = new PTP_Twilio_Integration();
    $twilio->generate_ivr_twiml();
}

/**
 * IVR Response Handler
 */
function ptp_comm_ivr_response($request) {
    $params = $request->get_params();
    $digit = sanitize_text_field($params['Digits'] ?? '0');
    
    $twilio = new PTP_Twilio_Integration();
    $twilio->handle_ivr_response($digit);
}

/**
 * Voicemail TwiML Generator
 */
function ptp_comm_voicemail_twiml($request) {
    $twilio = new PTP_Twilio_Integration();
    $twilio->generate_voicemail_twiml();
}

/**
 * Voicemail Complete Callback
 */
function ptp_comm_voicemail_complete($request) {
    $params = $request->get_params();
    
    $twilio = new PTP_Twilio_Integration();
    $twilio->handle_voicemail_complete($params);
    
    return new WP_REST_Response('OK', 200);
}

/**
 * Recording Complete Callback
 */
function ptp_comm_recording_complete($request) {
    global $wpdb;
    
    $params = $request->get_params();
    
    $call_sid = sanitize_text_field($params['CallSid'] ?? '');
    $recording_url = sanitize_text_field($params['RecordingUrl'] ?? '');
    $duration = intval($params['RecordingDuration'] ?? 0);
    
    if ($call_sid) {
        // Update call record with recording info
        $wpdb->update(
            $wpdb->prefix . 'ptp_voice_calls',
            array(
                'recording_url' => $recording_url,
                'duration' => $duration
            ),
            array('twilio_sid' => $call_sid),
            array('%s', '%d'),
            array('%s')
        );
    }
    
    return new WP_REST_Response('OK', 200);
}

/**
 * Chat Message Handler
 */
function ptp_comm_chat_message($request) {
    global $wpdb;
    
    $params = $request->get_json_params();
    
    $session_id = sanitize_text_field($params['session_id']);
    $content = sanitize_textarea_field($params['content']);
    $sender_type = sanitize_text_field($params['sender_type']);
    
    $wpdb->insert(
        $wpdb->prefix . 'ptp_chat_messages',
        array(
            'session_id' => $session_id,
            'sender_type' => $sender_type,
            'content' => $content
        ),
        array('%s', '%s', '%s')
    );
    
    $wpdb->update(
        $wpdb->prefix . 'ptp_chat_sessions',
        array('last_message_at' => current_time('mysql')),
        array('session_id' => $session_id),
        array('%s'),
        array('%s')
    );
    
    return new WP_REST_Response(array('success' => true), 200);
}

/**
 * ============================================================================
 * MESSAGE QUEUE PROCESSOR
 * ============================================================================
 */
add_action('ptp_comm_process_queue', 'ptp_commhub_process_message_queue');
function ptp_commhub_process_message_queue() {
    global $wpdb;
    
    if (get_option('ptp_comm_queue_enabled') !== '1') {
        return;
    }
    
    $batch_size = get_option('ptp_comm_queue_batch_size', 50);
    
    $messages = $wpdb->get_results($wpdb->prepare("
        SELECT * FROM {$wpdb->prefix}ptp_message_queue
        WHERE status = 'pending'
        AND (scheduled_for IS NULL OR scheduled_for <= NOW())
        AND attempts < max_attempts
        ORDER BY priority DESC, id ASC
        LIMIT %d
    ", $batch_size));
    
    foreach ($messages as $msg) {
        // Check quiet hours unless this is a campaign
        if (!$msg->campaign_id && !ptp_comm_check_quiet_hours()) {
            continue;
        }
        
        // Send the message
        $result = ptp_commhub_send_sms_immediate($msg->parent_id, $msg->content, $msg->campaign_id);
        
        if ($result) {
            $wpdb->update(
                $wpdb->prefix . 'ptp_message_queue',
                array('status' => 'sent', 'processed_at' => current_time('mysql')),
                array('id' => $msg->id),
                array('%s', '%s'),
                array('%d')
            );
            
            // Update campaign counters if applicable
            if ($msg->campaign_id) {
                $wpdb->query($wpdb->prepare("
                    UPDATE {$wpdb->prefix}ptp_campaigns 
                    SET sent_count = sent_count + 1 
                    WHERE id = %d
                ", $msg->campaign_id));
            }
        } else {
            $wpdb->update(
                $wpdb->prefix . 'ptp_message_queue',
                array(
                    'attempts' => $msg->attempts + 1,
                    'status' => ($msg->attempts + 1 >= $msg->max_attempts) ? 'failed' : 'pending'
                ),
                array('id' => $msg->id),
                array('%d', '%s'),
                array('%d')
            );
            
            // Update campaign failure count
            if ($msg->campaign_id && ($msg->attempts + 1 >= $msg->max_attempts)) {
                $wpdb->query($wpdb->prepare("
                    UPDATE {$wpdb->prefix}ptp_campaigns 
                    SET failed_count = failed_count + 1 
                    WHERE id = %d
                ", $msg->campaign_id));
            }
        }
    }
}

/**
 * ============================================================================
 * ANALYTICS SNAPSHOT CREATOR
 * ============================================================================
 */
add_action('ptp_comm_create_analytics_snapshot', 'ptp_commhub_create_daily_snapshot');
function ptp_commhub_create_daily_snapshot() {
    global $wpdb;
    
    $yesterday = date('Y-m-d', strtotime('-1 day'));
    
    // Get metrics for yesterday
    $messages_sent = $wpdb->get_var($wpdb->prepare("
        SELECT COUNT(*) FROM {$wpdb->prefix}ptp_messages 
        WHERE direction = 'outbound' AND DATE(created_at) = %s
    ", $yesterday));
    
    $messages_received = $wpdb->get_var($wpdb->prepare("
        SELECT COUNT(*) FROM {$wpdb->prefix}ptp_messages 
        WHERE direction = 'inbound' AND DATE(created_at) = %s
    ", $yesterday));
    
    $conversations_new = $wpdb->get_var($wpdb->prepare("
        SELECT COUNT(*) FROM {$wpdb->prefix}ptp_conversations 
        WHERE DATE(created_at) = %s
    ", $yesterday));
    
    $optouts = $wpdb->get_var($wpdb->prepare("
        SELECT COUNT(*) FROM {$wpdb->prefix}ptp_compliance_log 
        WHERE event_type = 'opt_out' AND DATE(created_at) = %s
    ", $yesterday));
    
    $response_rate = $messages_sent > 0 ? round(($messages_received / $messages_sent) * 100, 2) : 0;
    
    // Insert snapshot
    $wpdb->replace(
        $wpdb->prefix . 'ptp_analytics_snapshots',
        array(
            'metric_date' => $yesterday,
            'messages_sent' => $messages_sent,
            'messages_received' => $messages_received,
            'conversations_new' => $conversations_new,
            'optouts' => $optouts,
            'response_rate' => $response_rate,
            'market' => null
        ),
        array('%s', '%d', '%d', '%d', '%d', '%f', '%s')
    );
}

/**
 * ============================================================================
 * HELPER: SEND SMS IMMEDIATE (BYPASS QUEUE)
 * ============================================================================
 */
function ptp_commhub_send_sms_immediate($parent_id, $content, $conversation_id = null) {
    global $wpdb;
    
    $parent = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM {$wpdb->prefix}ptp_parents WHERE id = %d",
        $parent_id
    ));
    
    if (!$parent) {
        return false;
    }
    
    // Check consent
    if ($parent->opted_out || $parent->consent_status === 'opt_out') {
        return false;
    }
    
    $twilio = new PTP_Twilio_Integration();
    $result = $twilio->send_sms($parent->phone, $content);
    
    if (!$result) {
        return false;
    }
    
    // Find or create conversation
    if (!$conversation_id) {
        $conversation = $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}ptp_conversations WHERE parent_id = %d ORDER BY id DESC LIMIT 1",
            $parent_id
        ));
        
        if ($conversation) {
            $conversation_id = $conversation->id;
        } else {
            $wpdb->insert(
                $wpdb->prefix . 'ptp_conversations',
                array(
                    'parent_id' => $parent_id,
                    'channel' => 'sms',
                    'status' => 'waiting_parent'
                ),
                array('%d', '%s', '%s')
            );
            $conversation_id = $wpdb->insert_id;
        }
    }
    
    // Insert message record
    $wpdb->insert(
        $wpdb->prefix . 'ptp_messages',
        array(
            'conversation_id' => $conversation_id,
            'parent_id' => $parent_id,
            'direction' => 'outbound',
            'channel' => 'sms',
            'content' => $content,
            'twilio_sid' => $result['sid'] ?? '',
            'status' => 'sent',
            'sent_by_user_id' => get_current_user_id(),
            'sent_at' => current_time('mysql')
        ),
        array('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%d', '%s')
    );
    
    $message_id = $wpdb->insert_id;
    
    // Update conversation
    $wpdb->update(
        $wpdb->prefix . 'ptp_conversations',
        array(
            'last_message_id' => $message_id,
            'last_message_at' => current_time('mysql'),
            'last_message_direction' => 'outbound'
        ),
        array('id' => $conversation_id),
        array('%d', '%s', '%s'),
        array('%d')
    );
    
    // Update parent last contacted
    $wpdb->update(
        $wpdb->prefix . 'ptp_parents',
        array('last_contacted_at' => current_time('mysql')),
        array('id' => $parent_id),
        array('%s'),
        array('%d')
    );
    
    do_action('ptp_message_sent', $parent_id, $message_id);
    
    return true;
}
