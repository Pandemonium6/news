# coding: utf-8
#import os,sys
import sys
sys.path.append("..")

from lib.response import JsonResponse, not_match_func
from models import NewsItem, Subscription
from news_web.settings import DEFAULT_WECHAT_OPENID

# import os
# import os.path as op
# import os.system as sys
# root_path = os.path.abspath(__file__)
# root_path = os.path.dirname(os.path.dirname(abs_path))
# sys.path.append(root_path)

def ping(request):
    handler_map = {
        "GET": ping_get
    }
    return handler_map.get(request.method, not_match_func)(request)


def news(request):
    handler_map = {
        "GET": get_news
    }
    return handler_map.get(request.method, not_match_func)(request)


def subscriptions(request):
    handler_map = {
        "GET": get_subscriptions,
        "POST": add_subscriptions,
        "DELETE": remove_subscriptions
    }
    return handler_map.get(request.method, not_match_func)(request)


def ping_get(request):
    return JsonResponse(
        {
            'msg': 'pong'
        }
    )


def get_news(request):
    news_id = request.qs['news_id']
    return JsonResponse(
        {
            'news': NewsItem.objects.get(id=news_id).to_json()
        }
    )


def get_subscriptions(request):
    subscription = Subscription.ensure_subscription(DEFAULT_WECHAT_OPENID)
    return JsonResponse(
        {
            'subscription': subscription.to_json()
        }
    )


def add_subscriptions(request):
    keyword = request.json.get('keyword')
    if keyword:
        Subscription.add_keyword(DEFAULT_WECHAT_OPENID, keyword)
    return JsonResponse({})


def remove_subscriptions(request):
    keyword = request.json.get('keyword')
    if keyword:
        Subscription.remove_keyword(DEFAULT_WECHAT_OPENID, keyword)
    return JsonResponse({})
