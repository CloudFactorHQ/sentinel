# Makefile for Bref PHP Serverless Application with AWS SAM

# --- Configuration Variables ---
PROJECT_NAME := Sentinel
AWS_REGION := us-east-1
S3_BUCKET := sentinel-sam-artifacts-bucket-140620252000
PHP_VERSION := 8.4
# Bref's official AWS account ID for layers (x86_64 and arm64 PHP 8.1+)
BREF_LAYER_AWS_ACCOUNT_ID := 534081306603

# Check https://runtimes.bref.sh/ for the latest version number (e.g., :26 for php-84)
#For SQS/event consumers, use 'php-XX'.
BREF_PHP_LAYER_ARN := arn:aws:lambda:$(AWS_REGION):$(BREF_LAYER_AWS_ACCOUNT_ID):layer:php-$(PHP_VERSION):26

# --- SAM CLI Commands ---
# These variables define the core SAM CLI commands.
SAM_BUILD_CMD := sam build
SAM_PACKAGE_CMD := sam package --output-template-file packaged.yaml --s3-bucket $(S3_BUCKET)
SAM_DEPLOY_CMD := sam deploy --template-file packaged.yaml --stack-name $(PROJECT_NAME) --capabilities CAPABILITY_IAM
SAM_LOCAL_API_CMD := sam local start-api
SAM_LOCAL_INVOKE_CMD := sam local invoke

build-SentinelKamalConfigurationUpdater:
	@echo "--- Building SentinelKamalConfigurationUpdater Lambda function with SAM ---"
	@echo "--- Installing production Composer dependencies ---"
	cp -rf src/ $(ARTIFACTS_DIR)/src
	cp composer.json $(ARTIFACTS_DIR)
	cp composer.lock $(ARTIFACTS_DIR)
	cp -rf vendor/ $(ARTIFACTS_DIR)/vendor
	composer install --no-dev --optimize-autoloader

	@echo "--- Cleaning up unnecessary vendor files to reduce package size ---"
	# Remove git/github/tests directories from vendor packages
	find vendor/ -type d -name ".git" -exec rm -rf {} + || true
	find vendor/ -type d -name ".github" -exec rm -rf {} + || true
	find vendor/ -type d -name "tests" -exec rm -rf {} + || true
	# Remove common dev files
	find vendor/ -type f -name "*.md" -delete || true
	find vendor/ -type f -name "*.json" ! -name "composer.json" -delete || true

build-SentinelKamalConfigurationPullRequest:
	@echo "--- Building SentinelKamalConfigurationPullRequest Lambda function with SAM ---"
	@echo "--- Installing production Composer dependencies ---"
	cp -rf src/ $(ARTIFACTS_DIR)/src
	cp composer.json $(ARTIFACTS_DIR)
	cp composer.lock $(ARTIFACTS_DIR)
	cp -rf vendor/ $(ARTIFACTS_DIR)/vendor
	composer install --no-dev --optimize-autoloader
	
	@echo "--- Cleaning up unnecessary vendor files to reduce package size ---"
	# Remove git/github/tests directories from vendor packages
	find vendor/ -type d -name ".git" -exec rm -rf {} + || true
	find vendor/ -type d -name ".github" -exec rm -rf {} + || true
	find vendor/ -type d -name "tests" -exec rm -rf {} + || true
	# Remove common dev files
	find vendor/ -type f -name "*.md" -delete || true
	find vendor/ -type f -name "*.json" ! -name "composer.json" -delete || true
