<?php

/**
 * Couchbase extension stubs
 * Gathered from https://docs.couchbase.com/sdk-api/couchbase-php-client-2.3.0/index.html
 * Maintainer: sergey@couchbase.com
 *
 * https://github.com/couchbase/php-couchbase/tree/v2.6.1/api
 */

use function Couchbase\fastlzCompress as couchbase_fastlz_compress;
use function Couchbase\fastlzDecomress as couchbase_fastlz_decompress;
use function Couchbase\zlibCompress as couchbase_zlib_compress;
use function Couchbase\zlibDecomress as couchbase_zlib_decompress;

use function Couchbase\passthruEncoder as couchbase_passthru_encoder;
use function Couchbase\passthruDecoder as couchbase_passthru_decoder;
use function Couchbase\defaultEncoder as couchbase_default_encoder;
use function Couchbase\defaultDecoder as couchbase_default_decoder;
use function Couchbase\basicEncoderV1 as couchbase_basic_encoder_v1;
use function Couchbase\basicDecoderV1 as couchbase_basic_decoder_v1;

class_alias("Couchbase\\Cluster", "CouchbaseCluster");
class_alias("Couchbase\\Bucket", "CouchbaseBucket");
class_alias("Couchbase\\MutationToken", "CouchbaseMutationToken");
class_alias("Couchbase\\MutationState", "CouchbaseMutationState");
class_alias("Couchbase\\BucketManager", "CouchbaseBucketManager");
class_alias("Couchbase\\ClusterManager", "CouchbaseClusterManager");
class_alias("Couchbase\\LookupInBuilder", "CouchbaseLookupInBuilder");
class_alias("Couchbase\\MutateInBuilder", "CouchbaseMutateInBuilder");
class_alias("Couchbase\\N1qlQuery", "CouchbaseN1qlQuery");
class_alias("Couchbase\\SearchQuery", "CouchbaseSearchQuery");
class_alias("Couchbase\\SearchQueryPart", "CouchbaseAbstractSearchQuery");
class_alias("Couchbase\\QueryStringSearchQuery", "CouchbaseStringSearchQuery");
class_alias("Couchbase\\MatchSearchQuery", "CouchbaseMatchSearchQuery");
class_alias("Couchbase\\MatchPhraseSearchQuery", "CouchbaseMatchPhraseSearchQuery");
class_alias("Couchbase\\PrefixSearchQuery", "CouchbasePrefixSearchQuery");
class_alias("Couchbase\\RegexpSearchQuery", "CouchbaseRegexpSearchQuery");
class_alias("Couchbase\\NumericRangeSearchQuery", "CouchbaseNumericRangeSearchQuery");
class_alias("Couchbase\\DisjunctionSearchQuery", "CouchbaseDisjunctionSearchQuery");
class_alias("Couchbase\\DateRangeSearchQuery", "CouchbaseDateRangeSearchQuery");
class_alias("Couchbase\\ConjunctionSearchQuery", "CouchbaseConjunctionSearchQuery");
class_alias("Couchbase\\BooleanSearchQuery", "CouchbaseBooleanSearchQuery");
class_alias("Couchbase\\WildcardSearchQuery", "CouchbaseWildcardSearchQuery");
class_alias("Couchbase\\DocIdSearchQuery", "CouchbaseDocIdSearchQuery");
class_alias("Couchbase\\BooleanFieldSearchQuery", "CouchbaseBooleanFieldSearchQuery");
class_alias("Couchbase\\TermSearchQuery", "CouchbaseTermSearchQuery");
class_alias("Couchbase\\PhraseSearchQuery", "CouchbasePhraseSearchQuery");
class_alias("Couchbase\\MatchAllSearchQuery", "CouchbaseMatchAllSearchQuery");
class_alias("Couchbase\\MatchNoneSearchQuery", "CouchbaseMatchNoneSearchQuery");
class_alias("Couchbase\\DateRangeSearchFacet", "CouchbaseDateRangeSearchFacet");
class_alias("Couchbase\\NumericRangeSearchFacet", "CouchbaseNumericRangeSearchFacet");
class_alias("Couchbase\\TermSearchFacet", "CouchbaseTermSearchFacet");
class_alias("Couchbase\\SearchFacet", "CouchbaseSearchFacet");
class_alias("Couchbase\\ViewQuery", "CouchbaseViewQuery");
class_alias("Couchbase\\DocumentFragment", "CouchbaseDocumentFragment");
class_alias("Couchbase\\Document", "CouchbaseMetaDoc");
class_alias("Couchbase\\Exception", "CouchbaseException");
class_alias("Couchbase\\ClassicAuthenticator", "CouchbaseAuthenticator");

define("COUCHBASE_PERSISTTO_MASTER", 1);
define("COUCHBASE_PERSISTTO_ONE", 1);
define("COUCHBASE_PERSISTTO_TWO", 2);
define("COUCHBASE_PERSISTTO_THREE", 4);

define("COUCHBASE_REPLICATETO_ONE", 16);
define("COUCHBASE_REPLICATETO_TWO", 32);
define("COUCHBASE_REPLICATETO_THREE", 64);

define("COUCHBASE_SUCCESS", 0);
define("COUCHBASE_AUTH_CONTINUE", 1);
define("COUCHBASE_AUTH_ERROR", 2);
define("COUCHBASE_DELTA_BADVAL", 3);
define("COUCHBASE_E2BIG", 4);
define("COUCHBASE_EBUSY", 5);
define("COUCHBASE_EINTERNAL", 6);
define("COUCHBASE_EINVAL", 7);
define("COUCHBASE_ENOMEM", 8);
define("COUCHBASE_ERANGE", 9);
define("COUCHBASE_ERROR", 10);
define("COUCHBASE_ETMPFAIL", 11);
define("COUCHBASE_KEY_EEXISTS", 12);
define("COUCHBASE_KEY_ENOENT", 13);
define("COUCHBASE_DLOPEN_FAILED", 14);
define("COUCHBASE_DLSYM_FAILED", 15);
define("COUCHBASE_NETWORK_ERROR", 16);
define("COUCHBASE_NOT_MY_VBUCKET", 17);
define("COUCHBASE_NOT_STORED", 18);
define("COUCHBASE_NOT_SUPPORTED", 19);
define("COUCHBASE_UNKNOWN_COMMAND", 20);
define("COUCHBASE_UNKNOWN_HOST", 21);
define("COUCHBASE_PROTOCOL_ERROR", 22);
define("COUCHBASE_ETIMEDOUT", 23);
define("COUCHBASE_CONNECT_ERROR", 24);
define("COUCHBASE_BUCKET_ENOENT", 25);
define("COUCHBASE_CLIENT_ENOMEM", 26);
define("COUCHBASE_CLIENT_ENOCONF", 27);
define("COUCHBASE_EBADHANDLE", 28);
define("COUCHBASE_SERVER_BUG", 29);
define("COUCHBASE_PLUGIN_VERSION_MISMATCH", 30);
define("COUCHBASE_INVALID_HOST_FORMAT", 31);
define("COUCHBASE_INVALID_CHAR", 32);
define("COUCHBASE_DURABILITY_ETOOMANY", 33);
define("COUCHBASE_DUPLICATE_COMMANDS", 34);
define("COUCHBASE_NO_MATCHING_SERVER", 35);
define("COUCHBASE_BAD_ENVIRONMENT", 36);
define("COUCHBASE_BUSY", 37);
define("COUCHBASE_INVALID_USERNAME", 38);
define("COUCHBASE_CONFIG_CACHE_INVALID", 39);
define("COUCHBASE_SASLMECH_UNAVAILABLE", 40);
define("COUCHBASE_TOO_MANY_REDIRECTS", 41);
define("COUCHBASE_MAP_CHANGED", 42);
define("COUCHBASE_INCOMPLETE_PACKET", 43);
define("COUCHBASE_ECONNREFUSED", 44);
define("COUCHBASE_ESOCKSHUTDOWN", 45);
define("COUCHBASE_ECONNRESET", 46);
define("COUCHBASE_ECANTGETPORT", 47);
define("COUCHBASE_EFDLIMITREACHED", 48);
define("COUCHBASE_ENETUNREACH", 49);
define("COUCHBASE_ECTL_UNKNOWN", 50);
define("COUCHBASE_ECTL_UNSUPPMODE", 51);
define("COUCHBASE_ECTL_BADARG", 52);
define("COUCHBASE_EMPTY_KEY", 53);
define("COUCHBASE_SSL_ERROR", 54);
define("COUCHBASE_SSL_CANTVERIFY", 55);
define("COUCHBASE_SCHEDFAIL_INTERNAL", 56);
define("COUCHBASE_CLIENT_FEATURE_UNAVAILABLE", 57);
define("COUCHBASE_OPTIONS_CONFLICT", 58);
define("COUCHBASE_HTTP_ERROR", 59);
define("COUCHBASE_DURABILITY_NO_MUTATION_TOKENS", 60);
define("COUCHBASE_UNKNOWN_MEMCACHED_ERROR", 61);
define("COUCHBASE_MUTATION_LOST", 62);
define("COUCHBASE_SUBDOC_PATH_ENOENT", 63);
define("COUCHBASE_SUBDOC_PATH_MISMATCH", 64);
define("COUCHBASE_SUBDOC_PATH_EINVAL", 65);
define("COUCHBASE_SUBDOC_PATH_E2BIG", 66);
define("COUCHBASE_SUBDOC_DOC_E2DEEP", 67);
define("COUCHBASE_SUBDOC_VALUE_CANTINSERT", 68);
define("COUCHBASE_SUBDOC_DOC_NOTJSON", 69);
define("COUCHBASE_SUBDOC_NUM_ERANGE", 70);
define("COUCHBASE_SUBDOC_BAD_DELTA", 71);
define("COUCHBASE_SUBDOC_PATH_EEXISTS", 72);
define("COUCHBASE_SUBDOC_MULTI_FAILURE", 73);
define("COUCHBASE_SUBDOC_VALUE_E2DEEP", 74);
define("COUCHBASE_EINVAL_MCD", 75);
define("COUCHBASE_EMPTY_PATH", 76);
define("COUCHBASE_UNKNOWN_SDCMD", 77);
define("COUCHBASE_ENO_COMMANDS", 78);
define("COUCHBASE_QUERY_ERROR", 79);
define("COUCHBASE_TMPFAIL", 11);
define("COUCHBASE_KEYALREADYEXISTS", 12);
define("COUCHBASE_KEYNOTFOUND", 13);